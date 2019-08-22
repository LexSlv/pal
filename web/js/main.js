new Vue({
    el: '#main',
    data: {
        tab: 1,
    },
});

const emailCheckRegex = /.+@.+\..+/i;


new Vue({
    el: '#regform',
    data: {
      isEmailTouched: false,
      abonent: {
        firstname: '',
        lastname: '',
        surname: '',
        birthday: '01/01/1970',
        certnum: '',
        email: '',
        passwd1: '',
        passwd2: ''
      }
    },
    watch: {
      passwd2: 'checkPasswordsEquality',
      passwd1: 'checkPasswordsEquality',
    },
    computed: {
      isEmailValid() {
        return emailCheckRegex.test(this.email);
      },
  
      isEmailError() {
        return !this.isEmailValid && this.isEmailTouched;
      },
    },
    methods: {
      checkPasswordsEquality() {
        const { password, passwd2 } = this;
        const { refPasswd } = this.$refs;
  
        if (password !== passwd2) {
          refPasswd.setCustomValidity(
            'Пароли должны совпадать',
          );
        } else {
          refPasswd.setCustomValidity('');
        }
      },
      sendData(val) {
          fetch(this.$urlAPI3 + '/mainTarrifs')
                .then(function(response) {
                  return response.json();
                }).then((data) => {
                for (let i = 0; i < data.length; i++) {
                    const element = data[i];
                      if(element.Soc.trim() == this.orderData.FmcFttbTp.trim()) {
                        this.tariff = element.SocName;
                      } 
                    }
              return data;
            })
            .catch(() => {
              return false;
          })
      },

    }
});


new Vue({
    el: '#mobileMenu',
    data: {
        show: false,
    },
    methods: {}
});