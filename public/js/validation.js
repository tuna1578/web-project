new Vue({
    el: '#app',
    data: {
        firstName: '',
        lastName: '',
        email: '',
        subject: '',
        message: '',
        errorMessages: ''
    },
    methods: {
        submitForm() {
            this.errorMessages = ''; // Temizleme

            if (this.firstName.trim() === '') {
                this.errorMessages += "<p>Ad alanı boş bırakılamaz.</p>";
            }
            if (this.lastName.trim() === '') {
                this.errorMessages += "<p>Soyad alanı boş bırakılamaz.</p>";
            }
            if (this.email.trim() === '') {
                this.errorMessages += "<p>E-posta alanı boş bırakılamaz.</p>";
            } else if (!this.validateEmail(this.email)) {
                this.errorMessages += "<p>Geçerli bir e-posta adresi giriniz.</p>";
            }
            if (this.subject.trim() === '') {
                this.errorMessages += "<p>Konu alanı boş bırakılamaz.</p>";
            }
            if (this.message.trim() === '') {
                this.errorMessages += "<p>Mesaj alanı boş bırakılamaz.</p>";
            }

            if (this.errorMessages === '') {
                // Vue.js ile form gönderimi
                alert('Vue.js ile form gönderildi');
            }
        },
        validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        },
        validateFormVue() {
            this.submitForm();
        },
        validateFormJS() {
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;
            var errorMessages = document.getElementById("errorMessages");

            errorMessages.innerHTML = ""; // Temizleme

            if (firstName.trim() === '') {
                errorMessages.innerHTML += "<p>Ad alanı boş bırakılamaz.</p>";
            }
            if (lastName.trim() === '') {
                errorMessages.innerHTML += "<p>Soyad alanı boş bırakılamaz.</p>";
            }
            if (email.trim() === '') {
                errorMessages.innerHTML += "<p>E-posta alanı boş bırakılamaz.</p>";
            } else if (!this.validateEmail(email)) {
                errorMessages.innerHTML += "<p>Geçerli bir e-posta adresi giriniz.</p>";
            }
            if (subject.trim() === '') {
                errorMessages.innerHTML += "<p>Konu alanı boş bırakılamaz.</p>";
            }
            if (message.trim() === '') {
                errorMessages.innerHTML += "<p>Mesaj alanı boş bırakılamaz.</p>";
            }

            if (errorMessages.innerHTML === '') {
                // JavaScript ile form gönderimi
                alert('JavaScript ile form gönderildi');
            }
        }
    }
});