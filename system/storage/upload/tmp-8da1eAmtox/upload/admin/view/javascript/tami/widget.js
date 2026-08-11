window.addEventListener('load', function ()
{

    let refundForm = document.getElementById('tami-refund-form');
    let tamiAmountInput = document.getElementById('tami-refund-amount');
    TamiAdminPanel.init_inputs();

    if(refundForm !== null) {
        refundForm.addEventListener('submit', function (ev) {
            let form = this;
            let amount = tamiAmountInput.value;
            ev.preventDefault();
            let formData = new FormData();

            formData.append('amount', amount);
            formData.append('order_id', form.dataset.orderid);
            fetch(
                form.action, {
                    method: form.method,
                    body: formData,
                }
            ).then(r => r.json())
                .then(r => {
                    if(typeof r.status === "boolean" && r.status)
                    {
                        alert("İade işlemi başarılı!");
                        window.location.reload()
                    } else
                    {
                        alert(r.message);
                    }
                })
        });
    }
});