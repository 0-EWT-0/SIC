<style>
    .field {
        margin-bottom: 10px;
    }

    .field label {
        display: block;
        font-size: 12px;
        color: #777;
    }

    .field input {
        display: block;
        min-width: 250px;
        line-height: 1.5;
        font-size: 14px;
    }

    input[type="submit"] {
        display: block;
        padding: 6px 30px;
        font-size: 14px;
        background-color: #4460AA;
        color: #fff;
        border: none
    }
</style>




<section>
    <h1>Prueba Envio de Emails</h1>

    <form id="form">
        <div class="field">
            <label for="emailjs_name">emailjs_name</label>
            <input type="text" name="emailjs_name" id="emailjs_name">
        </div>
        <div class="field">
            <label for="emailjs_email">emailjs_email</label>
            <input type="text" name="emailjs_email" id="emailjs_email">
        </div>
        <div class="field">
            <label for="emailjs_messsage">emailjs_messsage</label>
            <input type="text" name="emailjs_messsage" id="emailjs_messsage">
        </div>

        <input type="submit" id="button" value="Send Email">
    </form>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <script type="text/javascript">
        emailjs.init('FhxswThWRa9nmtBgN')
    </script>

    <script>
        const btn = document.getElementById('button');

        document.getElementById('form')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                btn.value = 'Sending...';

                const serviceID = 'default_service';
                const templateID = 'template_dly1rml';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'Send Email';
                        alert('Sent!');
                    }, (err) => {
                        btn.value = 'Send Email';
                        alert(JSON.stringify(err));
                    });
            });
    </script>
</section>

