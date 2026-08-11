// [.] tab system init

class TamiAdminPanel {
    load_time = 0;

    constructor() {
        this.init_tabs()
        this.init_tooltips()
        this.init_forms()
        TamiAdminPanel.init_inputs()
        this.init_dismiss_buttons();
        this.init_events();

        this.page_load_completed();
        this.check_hash();
        this.toggle_installment_inputs();
    }

    init_dismiss_buttons = function () {
        let classSelf = this;
        let dismissButtons = document.getElementsByClassName('tami-admin-dismiss-application-button');
        if (!dismissButtons.length) return false;
        Array.from(dismissButtons).forEach(function (buttonSingle) {
            buttonSingle.addEventListener('click', classSelf.do_dismiss_application)
        });
    }

    init_tabs = function () {
        let classSelf = this;
        if (typeof tamiAdminPanelTabs === "object" && tamiAdminPanelTabs.length) {
            let tamiAdminPanelTabButtons = tamiAdminPanelTabs.map(item => document.getElementById(item.button));
            let tamiAdminPanelTabContents = tamiAdminPanelTabs.map(item => document.getElementById(item.content));
            let tamiAdminPanelTabSlugs = tamiAdminPanelTabs.map(item => item.slug);
            tamiAdminPanelTabButtons.forEach((tamiPanelButton, itempos) => {
                if (tamiPanelButton !== null)
                    tamiPanelButton.addEventListener('click', function () {
                        tamiAdminPanelTabContents.forEach((tamiTabContent, itempos2) => {
                            tamiTabContent.style.display = itempos !== itempos2 ? "none" : "block";
                        });

                        classSelf.dispatch_custom_event("tami-admin-tab-changed", {
                            tabName: tamiAdminPanelTabSlugs[itempos],
                            tabContent: tamiAdminPanelTabContents[itempos],
                            tabButton: tamiPanelButton
                        });

                    });
            })
        }

        [].slice.call(document.querySelectorAll('#environmentTab li button'))
            .forEach(envTabButton => {
                envTabButton.addEventListener('click', function (ev) {
                    let buttonTarget = this.dataset.tamibsTarget;
                    [].slice.call(document.querySelectorAll('#environmentTabContent .tami-tab-pane'))
                        .forEach(function (tabContainer) {
                            if (buttonTarget.indexOf(tabContainer.id) === -1)
                                tabContainer.style.display = "none";
                            else
                                tabContainer.style.display = "block";
                        })
                })
            });

        [].slice.call(document.querySelectorAll('.tami-go-apisettings-button'))
            .forEach(item => {
                item.addEventListener('click', function (ev) {
                    ev.preventDefault();
                    document.getElementById('tami-api-tab-button').click();
                })
            })
    }


    loading_enable = function (button) {
        if (button === null) return false;
        button.classList.add('tami-disabled');
        let loader = button.querySelector('.tami--button-loader');
        if (loader !== null) loader.removeAttribute('style');
        return true;
    }

    loading_disable = function (button) {
        if (button === null) return false;
        button.classList.remove('tami-disabled');
        let loader = button.querySelector('.tami--button-loader');
        if (loader !== null) loader.style.display = 'none';
        return true;
    }

    get_form_submitter = function (form) {
        let submitButton = form.querySelector("input[type=submit],button[type='submit']");
        if (submitButton === null) {
            let tabContainer = form.closest('.tami--tab-container');
            submitButton = tabContainer.querySelector("input[type=submit],button[type='submit']");
        }
        return submitButton;
    }

    showMessage(message, icon) {
        if (!icon) icon = "success"
        Swal.fire({
            text: message,
            toast: true,
            icon: icon
        })
    }

    static clearOpencartUrl = (input) => {
        return input.replace(/&amp;/g, '&')
    }

    isApiValid() {
        return new Promise((resolve, reject) => {
            jQuery.ajax({
                url: TamiAdminPanel.clearOpencartUrl(tamiApiValidateUrl),
                method: "GET",
                dataType: "json",
                success: function (data) {
                    if (typeof data === "object" && typeof data.status === "boolean" && data.status) {
                        resolve(true);
                    } else {
                        let error_message = (typeof data.message === "string") ? data.message : "Error!";
                        reject(error_message);
                    }
                },
                error: function (data) {
                    console.error(data);
                    reject()
                }
            })
        })
    }

    init_forms = function () {
        let classSelf = this;
        let tamiAjaxForms = document.getElementsByClassName('tami-ajax-form');

        if (tamiAjaxForms.length) {
            Array.from(tamiAjaxForms).forEach(formSingle => {
                formSingle.addEventListener('submit', function (ev) {
                    ev.preventDefault();
                    let form = this;
                    let submitButton = classSelf.get_form_submitter(form);
                    if (submitButton) {
                        classSelf.loading_enable(submitButton);
                    }
                    classSelf.form_ajax_submit(form);
                });
            })
        }

        let apiValidateButtons = [].slice.call(document.querySelectorAll('.tami-btn-validate-api'));
        if (apiValidateButtons.length) {
            apiValidateButtons.forEach(validateButtonItem => {
                validateButtonItem.addEventListener('click', async function (ev) {
                    ev.preventDefault();
                    let apiValidateButton = this;
                    setTimeout(async function () {
                        let ajaxForm = apiValidateButton.closest('.tami-ajax-form');
                        if (ajaxForm !== null) {
                            await classSelf.form_ajax_submit(ajaxForm);
                        }
                        classSelf.loading_enable(apiValidateButton);
                        classSelf.isApiValid().then(r => {
                            classSelf.showMessage(
                                ((tamiAdminPanelGlobals || {}).i18n || {}).api_validate_success
                            );
                            classSelf.loading_disable(apiValidateButton);
                        }).catch(error => {
                            classSelf.loading_disable(apiValidateButton);
                            classSelf.showMessage(error, "error")
                        })
                    }, 50);
                });
            })
        }
    }

    form_ajax_submit = function (form) {
        let classSelf = this;
        if (form === null) return false;
        let form_fields = jQuery(form).serialize();
        let button = classSelf.get_form_submitter(form);

        jQuery.ajax({
            url: form.getAttribute('action'),
            data: form_fields,
            method: form.method,
            dataType: "json",
            success: function (data) {
                if (button !== null)
                    classSelf.loading_disable(button);
                classSelf.dispatch_custom_event("tami-admin-form-ajax-submit-after", {
                    response: data,
                    form: form
                });

            }
        })
    }

    do_dismiss_application = function (ev) {
        let classSelf = this;
        let dismissParent = this.closest('.tami-dismissible-area');
        if (dismissParent !== null) {
            dismissParent.style.display = "none";
        }

        jQuery.ajax({
            url: TamiAdminPanel.clearOpencartUrl(tamiApplicationDismissUrl),
            method: 'get',
            success: function (data) {
                if (typeof data === "object" && typeof data.status === "boolean" && data.status) {
                    if (dismissParent.parentNode)
                        dismissParent.parentNode.removeChild(dismissParent);

                    (tamiAdminPanelGlobals.adminUI).dispatch_custom_event("tami-application-banner-dismiss-success", {});

                } else {
                    alert(((tamiAdminPanelGlobals || {}).i18n || {}).an_error_occurred);
                    dismissParent.removeAttribute('style');
                    (tamiAdminPanelGlobals.adminUI).dispatch_custom_event("tami-application-banner-dismiss-failed", {});
                }
            }
        });
        return true;
    }

    static refresh_installation_widget = () => {
        jQuery('#tami-installation-status-widget').load(
            TamiAdminPanel.clearOpencartUrl(tamiAdminPanelGlobals.tamiAdminPanelMainUrl) + ' #tami-installation-status-widget'
        )
    }

    disable_page_loading(event) {
        let event_details = event.detail;
        let load_time = event_details.load_time || 0;
        let pageOuter = document.querySelector('.tami-all');
        if(pageOuter != null)
            pageOuter.classList.remove('tami-page-loading');
    }

    page_load_completed() {
        let classSelf = this;
        this.dispatch_custom_event("tami-admin-page-loaded", {
            load_time: ++classSelf.load_time
        });
    }

    check_hash() {
        let hash = window.location.hash || "";
        if (typeof hash === "string" && hash !== "")
            hash = hash.replace('#', '')
        if (hash) {
            let button = document.querySelector('button[data-tamitarget="' + hash + '"]');
            if (button !== null)
                button.click();
        }
    }

    init_events() {
        let classSelf = this;
        document.addEventListener('tami-admin-page-loaded', this.disable_page_loading);
        document.addEventListener('tami-admin-form-ajax-submit-after', function (ev) {
            let details = ev.detail;
            if (typeof details === "object" && details.form !== null)
                classSelf.form_changes_saved(details.form);
        })
    }

    dispatch_custom_event(event_name, params) {
        let page_loaded_event = new CustomEvent(event_name, {detail: params});
        document.dispatchEvent(page_loaded_event);
    }

    form_changes_saved(form) {
        if (form === null) return false;

        let existsDismissible = form.querySelector('.tami-alert-dismissible');
        if (existsDismissible !== null) existsDismissible.parentNode.removeChild(existsDismissible);

        let alertHtml = '<div class="tami-alert tamialert tami-alert-success tami-alert-dismissible tami-fade tami-show" role="alert"><i class="fa fa-check-circle"></i> ' + ((tamiAdminPanelGlobals || {}).i18n || {}).changes_saved + '<button type="button" class="tami-btn-close" data-tamibs-dismiss="tamialert" aria-label="Close"></button></div>';
        let alertElement = document.createElement('div');
        alertElement.innerHTML = alertHtml;
        form.insertBefore(alertElement, form.firstChild);
        TamiAdminPanel.refresh_installation_widget()
    }

    init_tooltips() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-tamibs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            if (typeof tamibootstrap.Tooltip === "function") {
                let placement = tooltipTriggerEl.dataset.tamibsPlacement;
                return new tamibootstrap.Tooltip(tooltipTriggerEl, {
                    placement: placement || "left"
                })
            }
        });
    }

    toggle_installment_inputs() {
        var event = new Event('change');
        var tamiCheckInputToggle = [].slice.call(document.querySelectorAll('.tami-check-input-toggle'))
        tamiCheckInputToggle.map(function (item) {
            item.addEventListener('change', function (ev) {
                let row = this.closest('tr');
                if (row === null)
                    row = this.closest('.tami-row-closest');
                if(row) {
                    []
                        .slice
                        .call(row.querySelectorAll('.tami-check-input-toggleable'))
                        .map(t_item => {
                            t_item.style.visibility = this.checked ? 'visible' : 'hidden';
                            if ((t_item.nodeName).toUpperCase() !== "INPUT") {
                                t_item = t_item.querySelector('input');
                            }
                            if (this.checked && parseInt(t_item.value) === -1)
                                t_item.value = '0.00';
                            else if (!this.checked)
                                t_item.value = '-1';
                        });
                } else {

                }
            })
            item.dispatchEvent(event);
        });

        let mainSwitcher = document.getElementById('tami-installment-switch');
        if (mainSwitcher !== null) {
            let installmentContainer = document.getElementById('tami-installment-container');
            let installmentContainerClosed = document.getElementById('tami-installment-container-closed');
            let minimumInstallmentColumn = document.getElementById('minimum-installment-col');
            if (installmentContainer !== null && installmentContainerClosed !== null) {
                mainSwitcher.addEventListener('click', function (ev) {
                    installmentContainer.style.visibility = (this.checked) ? 'visible' : 'none';
                    minimumInstallmentColumn.style.display = (this.checked) ? '' : 'none';
                    installmentContainer.style.height = (this.checked) ? 'auto' : 0;

                    installmentContainerClosed.style.visibility = !(this.checked) ? 'visible' : 'none';
                    installmentContainerClosed.style.height = !(this.checked) ? 'auto' : 0;
                });
            }
        }

        let minimumInstallmentSwitcher = document.getElementById('form-InstallmentSettings-Minimum');
        let minInputSettings = document.getElementById('form-InstallmentSettings-MinimumAmount');
        if (minimumInstallmentSwitcher !== null) {
            let minInstallmentAmountContainer = document.getElementById('minimum-installment-column');


            if (minInstallmentAmountContainer !== null) {
                minimumInstallmentSwitcher.addEventListener('click', function (ev) {
                    minInstallmentAmountContainer.style.display = (this.checked) ? '' : 'none';
                    if (this.checked && parseInt(minInputSettings.value) === -1)
                        jQuery(minInputSettings).val('0.00');
                    else if (!this.checked)
                        jQuery(minInputSettings).val('-1');
                });
            }
        }

    }

    static validateFloatKeyPress(el, evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        var number = el.value.split('.');
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        //just one dot
        if (number.length > 1 && charCode == 46) {
            return false;
        }
        //get the carat position
        var caratPos = TamiAdminPanel.getSelectionStart(el);
        var dotPos = el.value.indexOf(".");
        if (caratPos > dotPos && dotPos > -1 && (number[1].length > 1)) {
            return false;
        }
        return true;
    }

    //thanks: http://javascript.nwbox.com/cursor_position/
    static getSelectionStart(o) {
        if (o.createTextRange) {
            var r = document.selection.createRange().duplicate()
            r.moveEnd('character', o.value.length)
            if (r.text == '') return o.value.length
            return o.value.lastIndexOf(r.text)
        } else return o.selectionStart
    }

    static init_inputs() {
        let self = this;
        [].slice.call(document.querySelectorAll('.tami-input-only-decimal'))
            .map(input_item => {
                input_item.onkeypress = function (event) {
                    return TamiAdminPanel.validateFloatKeyPress(this, event);
                };
                input_item.addEventListener('blur', function (ev) {
                    if (((this.value).indexOf('.')) + 1 === (this.value).length)
                        this.value += '00';
                    if ((this.value).indexOf('.') === -1)
                        this.value += '.00';
                })
            })
    }
}

window.addEventListener('load', function () {
    tamiAdminPanelGlobals.adminUI = new TamiAdminPanel();
});

var tami_failed_order_status_toggle = (inp) => {
    let row = document.getElementById('tami-failed-payment-status-row');
    row.style.display = inp.checked ? "table-row" : "none";
}