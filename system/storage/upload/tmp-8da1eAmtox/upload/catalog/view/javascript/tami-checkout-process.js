// tami-checkout-progress.js - 2023

class TamiCheckoutProcess {
    paymentDuring = false;
    closeEvents = false;

    dispatch_custom_event(event_name, params) {
        if (typeof params === "object") params.checkoutObject = this;
        let page_loaded_event = new CustomEvent(event_name, {detail: params});
        document.dispatchEvent(page_loaded_event);
    }

    constructor() {
        let self = this;
        this.initListener();
    }

    initCloseButtons() {
        if (this.closeEvents) return false;
        const self = this;
        let button = document.getElementById('tami-card-popup-close-btn');
        button.addEventListener('click', function (event) {
            event.preventDefault();
            self.showHidePopup(0);
        });
        this.closeEvents = true;
    }

    validateData() {
        if (typeof tamiPaymentForm === "object") {

        }
        return true;
    }

    showError(message) {
        if (typeof Swal === "function") {
            Swal
                .fire({
                    title: tamiCheckoutProcess_i18n.error_title,
                    text: message,
                    icon: 'error',
                    confirmButtonText: tamiCheckoutProcess_i18n.error_button_text
                })
        } else {
            alert(message);
        }

        this.dispatch_custom_event("tami-checkout-payment-error", {
            errorMessage: message
        })
    }

    generateHiddenInput(name, value) {
        let input = document.createElement('input');
        input.name = name;
        input.value = value;
        input.type = 'hidden';
        return input;
    }

    getPaymentForm(data) {
        if (typeof tamiCheckoutFields !== "object" || typeof tamiCheckoutFields.paymentUrl !== "string" || tamiCheckoutFields.paymentUrl === "")
            return false;

        let formElement = document.createElement('form');
        formElement.action = tamiCheckoutFields.paymentUrl;
        formElement.method = 'post';
        formElement.enctype = 'multipart/form-data';
        Object.keys(data).forEach(data_item_key => {
            if (typeof data[data_item_key] === "string" || typeof data[data_item_key] === "number")
                formElement.appendChild(this.generateHiddenInput(data_item_key, data[data_item_key]));
        })
        return formElement;
    }

    generateIframe() {
        let iframe = document.createElement('iframe');
        iframe.id = 'tami-card-popup-iframe';
        iframe.className = 'tami-card-popup-iframe';
        iframe.width = "100%";
        iframe.height = "100%";
        iframe.frameBorder = "0";

        this.dispatch_custom_event("tami-checkout-iframe-refreshed", {
            iframe: iframe
        });

        return iframe;
    }

    showHidePopup(show) {
        let popup = document.querySelector('#tamiCreditCardFormPopup .tami-card-popup');
        if (popup === null) return false;
        if (show)
            popup.classList.add('tami-card-popup-show');
        else
            popup.classList.remove('tami-card-popup-show');

        this.dispatch_custom_event("tami-checkout-popup-visibility-changed", {
            popup: popup,
            newStatus: show ? "show" : "hide"
        });

        return true;
    }

    setPaymentIframeBody(appendElement) {
        let iframe = document.getElementById('tami-card-popup-iframe'), iframeParent;
        if (iframe !== null) {
            iframeParent = iframe.parentNode;
            iframeParent.removeChild(iframe);
        }

        iframeParent = document.getElementById('tami-card-popup-inner');

        iframe = this.generateIframe();
        iframeParent.appendChild(iframe);

        var iframeDocument = iframe.contentWindow || iframe.contentDocument;
        if (iframeDocument.document)
            iframeDocument = iframeDocument.document;
        if (iframeDocument && typeof iframeDocument.body !== "undefined" && iframeDocument.body !== null) {
            iframeDocument.body.innerHTML = '';
            iframeDocument.body.appendChild(appendElement);
            this.dispatch_custom_event('tami-iframe-element-appended', {
                iframe: iframe,
                iframeDocument: iframeDocument,
                appendElement: appendElement
            });
        }

        if (iframeDocument && typeof iframeDocument.head !== "undefined" && iframeDocument.head !== null)
            iframeDocument.head.innerHTML = '';


        return true;
    }

    startPayment(self) {
        if (this.paymentDuring) return false;
        this.paymentDuring = true;
        self.initCloseButtons();

        this.dispatch_custom_event('tami-checkout-before-payment-start', {});

        setTimeout(function () {
            var
                tamiCheckoutStatus = document.getElementById('tami-checkout-status'),
                tamiInstallmentValue = document.querySelector('input[id^=tami-installment]:checked')
            ;

            var requiredVars = [tamiCheckoutStatus];
            if (requiredVars.find(item => item === null)) {
                self.showError(tamiCheckoutFields.i18n.required_parameters_missing);
                self.dispatch_custom_event('tami-checkout-required-fields-not-validated', {
                    requiredVars: requiredVars
                });
                return false;
            }


            if (tamiCheckoutStatus !== null && tamiCheckoutStatus.value === '1') {
                if (self.validateData()) {
                    let paymentData = Object.assign({}, tamiPaymentForm);

                    self.dispatch_custom_event('tami-checkout-data-validated', {
                        paymentData: paymentData
                    });

                    let form = self.getPaymentForm(paymentData);
                    if (self.setPaymentIframeBody(form)) {
                        self.showHidePopup(1);
                        form.submit();
                        self.clearNoticeDiv();
                        setTimeout(function () {
                            self.showHideLoading(0);
                        }, 1500);
                    }
                } else {
                    self.dispatch_custom_event('tami-checkout-data-not-validated', {});
                }
            }
            self.paymentDuring = false;
        }, 250);
    }

    clearNoticeDiv() {
        let noticeDiv = document.getElementById('tami-processs-data');
        if (noticeDiv === null) return false;
        noticeDiv.parentNode.removeChild(noticeDiv);
    }

    showHideLoading(show) {
        let loadingDiv = document.querySelector('.tami-card-popup-loading');
        if (loadingDiv === null) return false;

        if (show)
            loadingDiv.style.display = "block";
        else
            loadingDiv.style.display = "none";

        this.dispatch_custom_event('tami-checkout-loading-visibility-changed', {
            loading: loadingDiv,
            newStatus: show ? "show" : "hide"
        });

        return true;

    }

    paymentMessageSuccess(data) {

        this.dispatch_custom_event('tami-checkout-success-message-received', {
            data: data
        });
        let url;

        if (typeof tamiCheckoutFields === "object" && typeof tamiCheckoutFields.successRedirectUrl === "string") {
            url = tamiCheckoutFields.successRedirectUrl;
        }

        if (typeof data.orderId !== "undefined")
            url = url.replaceAll('_orderId_', data.orderId);
        if (typeof data.orderKey !== "undefined")
            url = url.replaceAll('_orderKey_', data.orderKey);

        if (url)
            window.location.href = url;
    }

    paymentMessageError(message) {

        this.dispatch_custom_event('tami-checkout-error-message-received', {
            errorMessage: message
        });

        this.showError(message);

        this.showHidePopup(0);
    }

    initListener() {
        let self = this;
        window.addEventListener('message', function (event) {
            let eventData = event.data || {};
            if (typeof eventData.status === "boolean" && eventData.status)
                self.paymentMessageSuccess(eventData);
            else
                self.paymentMessageError(eventData.message || tamiCheckoutFields.i18n.unknown_error);
        });
        this.initCustomerPaymentPage()
    }

    initCustomerPaymentPage() {
        let self = this;
        let orderReview = document.getElementById('tami-checkout-form');
        orderReview.addEventListener('submit', async (e) => {
            e.preventDefault();
            self.startPayment(self);
        });
    }
}

new TamiCheckoutProcess();
