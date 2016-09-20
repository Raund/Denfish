
$(function(){

    // DARKSCREEN

    var Darkscreen = {
        $el: null,
        show: function(){
            $("#tb_overlay").fadeIn("fast");
        },
        hide: function(){
            $("#tb_overlay").fadeOut("fast");
        },
        init: function(){
            var me = this;
            if(!jQuery("body").find("#TB_overlay").is("div")) /* если фон уже добавлен не добавляем повторно */
            {
                if(!jQuery.browser.msie) /* если браузер не ИЕ фоном будет div */
                    jQuery("body").append("<div id='tb_overlay'></div>");
                else /* иначе добавляем iframe */
                    jQuery("body").append("<div id='tb_overlay'><iframe scrolling='no' frameborder='0' style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; filter:alpha(opacity=0)'></iframe></div>");
            }

            me.$el = $('#tb_overlay');
        }
    };

    // ADVICE

    var Advice = {
        list: {},
        currentIndex: 0,
        length: 0,
        showNext: function(){
            var me = this;
            if(me.currentIndex < me.length-1){
                me.currentIndex++;
            }else{
                me.currentIndex=0;
            }
            me.render();
        },
        render: function(){
            var me = this;
            $('#xAdvices .x-advice').slideUp(500);
            $(me.list[me.currentIndex]).delay(500).slideDown(500);
        },
        init: function(){
            var me = this;
            $('#xAdvices .x-advice').each(function(key ,advice){
                me.length++;
                me.list[key] = advice;
            });
            me.currentIndex = getRandomInt(0, me.length-1);
            me.render();
            me.setListeners();
        },
        setListeners: function(){
            var me = this;
            $('.x-next-advice').on('click', function(){
                me.showNext();
                return false;
            });
        }
    };

    // REGEXP

    var Regexp = {
        url: /((https?|ftp)\:\/\/)([0-9A-Za-z\:\.\/\_\-\?\#\=\&]+)(\ )?/g,
        fio: /^[a-zа-яёєії\' ]{3,100}$/i,
        city: /^[a-zа-яёєії\-\' ]{2,100}$/i,
        phone: /^[0-9\-\(\)\+ ]{6,25}$/i,
        email: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
        postoffice: /^[0-9a-zа-яёєії\' ]{1,100}$/i,
    };

    // REGISTRATION

    var Registration = {
        isBusy: false,
        buttonText: '',
        el: {
            $popupBox: null,
            $openLink: null,
            $submitButton: null,
            $fioInput: null,
            $emailInput: null,
            //$cityInput: null,
            $phoneInput: null,
            $pass1Input: null,
            $pass2Input: null,
            $allInputs: null
        },
        elQueries: {
            popupBox: 'div.reg',
            openLink: '.x-show-register',
            submitButton: 'form input[type="submit"]',
            fioInput: 'form input[name="name"]',
            emailInput: 'form input[name="email"]',
            //cityInput: 'form input[name="city"]',
            phoneInput: 'form input[name="phone"]',
            pass1Input: 'form input[name="pass"]',
            pass2Input: 'form input[name="pass-repeat"]',
            allInputs: 'form input'
        },
        data: {
            fio: '',
            email: '',
            city: '',
            phone: '',
            pass1: '',
            pass2: ''
        },
        isAuth: false,
        init: function(){
            var me = this;

            me.el.$popupBox = $(me.elQueries.popupBox);
            me.el.$openLink = $(me.elQueries.openLink);
            me.el.$submitButton = me.el.$popupBox.find(me.elQueries.submitButton);
            me.el.$fioInput = me.el.$popupBox.find(me.elQueries.fioInput);
            me.el.$emailInput = me.el.$popupBox.find(me.elQueries.emailInput);
            //me.el.$cityInput = me.el.$popupBox.find(me.elQueries.cityInput);
            me.el.$phoneInput = me.el.$popupBox.find(me.elQueries.phoneInput);
            me.el.$pass1Input = me.el.$popupBox.find(me.elQueries.pass1Input);
            me.el.$pass2Input = me.el.$popupBox.find(me.elQueries.pass2Input);
            me.el.$allInputs = me.el.$popupBox.find(me.elQueries.allInputs);

            me.buttonText = me.el.$submitButton.val();

            if(isLogged){
                me.el.$openLink.parent().remove();
                return;
            }

            me.setListeners();
        },
        setListeners: function(){
            var me = this;
            me.el.$openLink.on('click', function(){
                me.show(); return false;
            });
            me.el.$submitButton.on('click', function(){
                me.onSubmit(); return false;
            });

            Darkscreen.$el.on('click', function(){
                me.hide();
            });
        },
        show: function(){
            var me = this;

            if(isLogged){
                console.info('User logged in.');
                return;
            }

            me.el.$pass1Input.val('');
            me.el.$pass2Input.val('');

            me.el.$popupBox.fadeIn(500);
            Darkscreen.show();
        },
        hide: function(){
            var me = this;
            me.el.$popupBox.fadeOut(500);
            Darkscreen.hide();
        },
        onSubmit: function(){
            var me = this;

            var d = new Date();

            if(me.isBusy)return false;

            me.data.fio = me.el.$fioInput.val();
            me.data.email = me.el.$emailInput.val();
            //me.data.city = me.el.$cityInput.val();
            me.data.phone = me.el.$phoneInput.val();
            me.data.pass1 = me.el.$pass1Input.val();
            me.data.pass2 = me.el.$pass2Input.val();

            me.data.fio =  me.data.fio
                .replace('  ', ' ')
                .replace('  ', ' ');

            var fio = {firstname: '', lastname: ''}, fioArray = me.data.fio.split(' ');



            if(fioArray[1]){
                fio.firstname = fioArray[1];
                fio.lastname = fioArray[0];
                if(fioArray[2]){
                    fio.firstname += ' ' + fioArray[2];
                }
            } else {
                fio.firstname = fioArray[0];
                fio.lastname = '-';
            }


            if(me.validate()){
                var sendData = {
                    controller: 'authentication',
                    firstname: fio.firstname,
                    lastname: fio.lastname,
                    phone: me.data.phone,
                    email: me.data.email,
                    passwd: me.data.pass1,
                    email_create:1,
                    ajax: true,
                    alias: 'Мой адресс ' + formatDate(d),
                    is_new_custumer: 1,
                    back: 'my-account',
                    submitAccount: ''
                }

                me.setBusy(true);

                $.ajax({
                    url: '/authentication',
                    method: 'POST',
                    data: sendData
                }).done(function(result){

                    var data = JSON.parse(result);

                    if(data.hasError){
                        if(data.errors && data.errors.length > 0){
                            alert(data.errors[0]);
                        } else {
                            alert('Ошибка регистрации. Попробуйте позже');
                        }
                        me.setBusy(false);
                    } else {
                        //me.hide();
                        me.setBusy(true, 'Переадресация в ЛК...');
                        document.location.href = '/my-account';
                    }

                }).fail(function(){
                    me.setBusy(false);
                    alert('Ошибка регистрации. Попробуйте позже');
                    //console.info('request fail', err);
                }).always(function(data){
                    //console.info('request complete', arguments);

                });

            }
        },
        validate: function(){
            var me = this;
            var error = false;

            me.el.$allInputs.removeClass('error');

            if(!(Regexp.fio.test(me.data.fio))){
                error = true;
                me.el.$fioInput.addClass('error');
            }

            if(!(Regexp.email.test(me.data.email))){
                error = true;
                me.el.$emailInput.addClass('error');
            }

            /*if(!(Regexp.city.test(me.data.city))){
                error = true;
                me.el.$cityInput.addClass('error');
            }*/

            if(!(Regexp.phone.test(me.data.phone))){
                error = true;
                me.el.$phoneInput.addClass('error');
            }

            if(me.data.pass1.length < 5){
                error = true;
                me.el.$pass1Input.addClass('error');
                me.el.$pass2Input.val('');
            }else if(me.data.pass1 != me.data.pass2){
                error = true;
                me.el.$pass2Input.addClass('error');
            }

            return !error;
        },
        setBusy: function(isBusy, loadingText){
            var me = this;
            loadingText = loadingText || 'Ожидайте...';
            if(isBusy){
                me.isBusy = true;
                me.el.$submitButton.val(loadingText);
            }else{
                setTimeout(function(){
                    me.isBusy = false;
                    me.el.$submitButton.val(me.buttonText);
                }, 1000);
            }
        }
    };

    // LOGIN

    var Login = {
        isBusy: false,
        buttonText: '',
        el: {
            $popupBox: null,
            $openLink: null,
            $submitButton: null,
            $emailInput: null,
            $pass1Input: null,
            $allInputs: null
        },
        elQueries: {
            popupBox: 'div.enter',
            openLink: '.x-show-login',
            submitButton: 'form input[type="submit"]',
            emailInput: 'form input[name="email"]',
            passInput: 'form input[name="pass"]',
            allInputs: 'form input'
        },
        data: {
            email: '',
            pass: ''
        },
        isAuth: false,
        init: function(){
            var me = this;
            me.el.$popupBox = $(me.elQueries.popupBox);
            me.el.$openLink = $(me.elQueries.openLink);
            me.el.$submitButton = me.el.$popupBox.find(me.elQueries.submitButton);
            me.el.$emailInput = me.el.$popupBox.find(me.elQueries.emailInput);
            me.el.$passInput = me.el.$popupBox.find(me.elQueries.passInput);
            me.el.$allInputs = me.el.$popupBox.find(me.elQueries.allInputs);

            me.buttonText = me.el.$submitButton.val();

            me.setListeners();
        },
        setListeners: function(){
            var me = this;
            me.el.$openLink.on('click', function(){
                me.show(); return false;
            });
            me.el.$submitButton.on('click', function(){
                me.onSubmit(); return false;
            });

            Darkscreen.$el.on('click', function(){
                me.hide();
            });
        },
        show: function(){
            var me = this;

            if(isLogged){
                console.info('User logged in.');
                return;
            }

            me.el.$passInput.val('');


            me.el.$popupBox.fadeIn(500);
            Darkscreen.show();
        },
        hide: function(){
            var me = this;
            me.el.$popupBox.fadeOut(500);
            Darkscreen.hide();
        },
        onSubmit: function(){
            var me = this;

            if(me.isBusy)return false;

            me.data.email = me.el.$emailInput.val();
            me.data.pass = me.el.$passInput.val();

            if(me.validate()){
                var sendData = {
                    controller: 'authentication',
                    email: me.data.email,
                    passwd: me.data.pass,
                    ajax: true,
                    SubmitLogin: ''
                }

                me.setBusy(true);

                $.ajax({
                    url: '/authentication',
                    method: 'POST',
                    data: sendData
                }).done(function(result){

                        var data = JSON.parse(result);

                        if(data.hasError){
                            if(data.errors && data.errors.length > 0){
                                alert(data.errors[0]);
                            } else {
                                alert('Ошибка авторизации. Попробуйте позже');
                            }
                            me.setBusy(false);
                        } else {
                            //me.hide();
                            me.setBusy(true, 'Переадресация в ЛК...');
                            document.location.href = '/my-account';
                        }

                    }).fail(function(){
                        me.setBusy(false);
                        alert('Ошибка авторизации. Попробуйте позже');
                        //console.info('request fail', err);
                    }).always(function(data){
                        //console.info('request complete', arguments);

                    });

            }
        },
        validate: function(){
            var me = this;
            var error = false;

            me.el.$allInputs.removeClass('error');

            if(!(Regexp.email.test(me.data.email))){
                error = true;
                me.el.$emailInput.addClass('error');
            }

            if(me.data.pass.length < 5){
                error = true;
                me.el.$passInput.addClass('error');
            }

            return !error;
        },
        setBusy: function(isBusy, loadingText){
            var me = this;
            loadingText = loadingText || 'Ожидайте...';
            if(isBusy){
                me.isBusy = true;
                me.el.$submitButton.val(loadingText);
            }else{
                setTimeout(function(){
                    me.isBusy = false;
                    me.el.$submitButton.val(me.buttonText);
                }, 1000);
            }
        }
    };


    // ORDER FORM

    var Order = {
        isBusy: false,
        isOpen: false,
        type: null,
        addresses: {},
        buttonText: '',
        id_address_delivery: 0,
        id_address_invoice: 0,
        id_customer: 0,
        currentTemplate: {},
        el: {
            $popupBox: null,
            $openLink: null,
            $submitButton: null,
            $fioInput: null,
            $emailInput: null,
            $cityInput: null,
            $postofficeInput: null,
            $paymentmethodSelect: null,
            $phoneInput: null,
            $pass1Input: null,
            $pass2Input: null,
            $allInputs: null,

            $changeBox: null,
            $changeWithRegButton: null,
            $changeWithoutRegButton: null,
            $withRegCollection: null,
            $withoutRegCollection: null,
            $loggedCollection: null,
        },
        elQueries: {
            popupBox: '#x-order-form',
            openLink: '.x-create-order',
            submitButton: 'form input[type="submit"]',
            fioInput: 'form input[name="name"]',
            emailInput: 'form input[name="email"]',
            cityInput: 'form input[name="city"]',
            postofficeInput: 'form input[name="post_office"]',
            paymentmethodSelect: 'form select[name="payment_method"]',
            templateSelect: 'form select[name="template"]',
            phoneInput: 'form input[name="phone"]',
            pass1Input: 'form input[name="pass"]',
            pass2Input: 'form input[name="pass-repeat"]',
            allInputs: 'form input',

            changeBox: '.x-change-type-box',
            changeWithRegButton: '.x-change-type[data-type="with_reg"]',
            changeWithoutRegButton: '.x-change-type[data-type="without_reg"]',

            withRegCollection: '.with_reg',
            withoutRegCollection: '.without_reg',
            loggedCollection: '.logged'


        },
        data: {
            fio: '',
            email: '',
            city: '',
            post_office: '',
            payment_method: '',
            phone: '',
            pass1: '',
            pass2: ''
        },
        startPos: null,
        isAuth: false,
        init: function(){
            var me = this;



            me.el.$popupBox = $(me.elQueries.popupBox);
            me.el.$openLink = $(me.elQueries.openLink);
            me.el.$submitButton = me.el.$popupBox.find(me.elQueries.submitButton);
            me.el.$fioInput = me.el.$popupBox.find(me.elQueries.fioInput);
            me.el.$emailInput = me.el.$popupBox.find(me.elQueries.emailInput);
            me.el.$cityInput = me.el.$popupBox.find(me.elQueries.cityInput);
            me.el.$postofficeInput = me.el.$popupBox.find(me.elQueries.postofficeInput);
            me.el.$paymentmethodSelect = me.el.$popupBox.find(me.elQueries.paymentmethodSelect);
            me.el.$templateSelect = me.el.$popupBox.find(me.elQueries.templateSelect);
            me.el.$phoneInput = me.el.$popupBox.find(me.elQueries.phoneInput);
            me.el.$pass1Input = me.el.$popupBox.find(me.elQueries.pass1Input);
            me.el.$pass2Input = me.el.$popupBox.find(me.elQueries.pass2Input);
            me.el.$allInputs = me.el.$popupBox.find(me.elQueries.allInputs);

            me.el.$withRegCollection = me.el.$popupBox.find(me.elQueries.withRegCollection);
            me.el.$withoutRegCollection = me.el.$popupBox.find(me.elQueries.withoutRegCollection);
            me.el.$loggedCollection = me.el.$popupBox.find(me.elQueries.loggedCollection);

            me.el.$changeBox = me.el.$popupBox.find(me.elQueries.changeBox);
            me.el.$changeWithRegButton = me.el.$popupBox.find(me.elQueries.changeWithRegButton);
            me.el.$changeWithoutRegButton = me.el.$popupBox.find(me.elQueries.changeWithoutRegButton);

            me.buttonText = me.el.$submitButton.val();

            if(isLogged){
                me.type = 'logged';
                me.el.$popupBox.addClass('type-logged');
                me.el.$changeBox.remove();
                me.el.$withRegCollection.remove();
                me.el.$withoutRegCollection.remove();
                me.getAddresses(function(){
                    var options = [];

                    me.addresses.forEach(function(address, key){
                        options.push('<option value="' + key + '">' + address.alias + '</option>');
                    });
                    
                    options = options.reverse();

                    me.el.$templateSelect.append(options.join(''));

                    me.applyTemplate();
                });
            }else{
                me.type = 'with_reg';
                me.el.$loggedCollection.remove();
            }

            me.setListeners();
        },
        getAddresses: function(callback){
            var me = this;
            var sendData = {
                controller: 'addresses',
                ajax: true,
                submitGetAddresses: ''
            }
            $.ajax({
                url: '/addresses',
                method: 'POST',
                data: sendData
            }).done(function(result){

                    var data = JSON.parse(result);

                    if(data.hasError){
                        if(data.errors && data.errors.length > 0){
                            console.warn(data.errors[0]);
                        } else {
                            console.warn('Ошибка инициализации адресов');
                        }
                    } else {
                        me.addresses = data.addresses;
                        console.log(me.addresses);
                        callback();
                    }

                }).fail(function(){

                    console.warn('Ошибка инициализации адресов');

                });
        },
        applyTemplate: function(){
            var me = this;
            var currTemplateId = me.el.$templateSelect.val();

            if(currTemplateId && me.addresses[currTemplateId]){
                var template = me.addresses[currTemplateId];
                me.currentTemplate = template;
                me.el.$fioInput.val(template.lastname + ' ' + template.firstname);
                me.el.$cityInput.val((template.city == ' - ') ? '' : template.city);
                if(template.address2 != ''){
                    var address2 = template.address2.replace('Отделение Новой Почты: ', '');
                    me.el.$postofficeInput.val(address2);
                }else{
                    me.el.$postofficeInput.val('');
                }
                me.el.$phoneInput.val(template.phone);
                //console.log(me.currentTemplate);
                me.id_address_delivery = me.currentTemplate.id_address;
                me.id_address_invoice = me.currentTemplate.id_address;
            }
        },
        setListeners: function(){
            var me = this;
            me.el.$openLink.on('click', function(){
                me.show(); return false;
            });
            me.el.$submitButton.on('click', function(){
                me.onSubmit(); return false;
            });

            Darkscreen.$el.on('click', function(){
                me.hide();
            });

            me.el.$changeWithRegButton.on('click', function(){
                me.el.$changeWithRegButton.addClass('active');
                me.el.$changeWithoutRegButton.removeClass('active');
                me.type = 'with_reg';
                me.el.$withRegCollection.show();
            });

            me.el.$changeWithoutRegButton.on('click', function(){
                me.el.$changeWithoutRegButton.addClass('active');
                me.el.$changeWithRegButton.removeClass('active');
                me.type = 'without_reg';
                me.el.$withRegCollection.hide();
            });

            me.el.$templateSelect.on('change', function(){
                me.applyTemplate();
            });
        },
        show: function(){
            var me = this;

            me.el.$pass1Input.val('');
            me.el.$pass2Input.val('');

            me.el.$popupBox.fadeIn(500);
            Darkscreen.show();

            me.startPos = Scroll.currentPos();
            Scroll.scrollTo(0);

            me.isOpen = true;
        },
        hide: function(){
            var me = this;

            if(!me.isOpen) return;
            me.el.$popupBox.fadeOut(500);
            Darkscreen.hide();
            Scroll.scrollTo(me.startPos, 500);

            me.isOpen = false;
        },
        onSubmit: function(){
            var me = this;


            if(me.isBusy)return false;


            var d = new Date();

            me.data.fio = me.el.$fioInput.val();
            me.data.email = me.el.$emailInput.val();
            me.data.city = me.el.$cityInput.val();
            me.data.post_office = me.el.$postofficeInput.val();
            me.data.payment_method = me.el.$paymentmethodSelect.val();
            me.data.phone = me.el.$phoneInput.val();
            me.data.pass1 = me.el.$pass1Input.val();
            me.data.pass2 = me.el.$pass2Input.val();

            me.data.fio =  me.data.fio
                .replace('  ', ' ')
                .replace('  ', ' ');

            var fio = {firstname: '', lastname: ''}, fioArray = me.data.fio.split(' ');



            if(fioArray[1]){
                fio.firstname = fioArray[1];
                fio.lastname = fioArray[0];
                if(fioArray[2]){
                    fio.firstname +=  ' ' + fioArray[2];
                }
            } else {
                fio.firstname = fioArray[0];
                fio.lastname = '-';
            }


            if(me.validate()){


                me.setBusy(true);

                if(me.type == 'logged'){

                    var sendDataAddress = {
                        controller: 'address',
                        firstname: fio.firstname,
                        lastname: fio.lastname,
                        phone: me.data.phone,
                        id_country: 216,
                        address1: 'Новая Почта',
                        address2: 'Отделение Новой Почты: ' + me.data.post_office,
                        city: me.data.city,
                        ajax: true,
                        alias: 'Мой адресс ' + formatDate(d),
                        submitAddress: ''
                    };

                    if(sendDataAddress.firstname == me.currentTemplate.firstname
                        && sendDataAddress.lastname == me.currentTemplate.lastname
                        && sendDataAddress.phone == me.currentTemplate.phone
                        && sendDataAddress.address1 == me.currentTemplate.address1
                        && sendDataAddress.address2 == me.currentTemplate.address2
                        && sendDataAddress.city == me.currentTemplate.city){
                        me.id_address_delivery = me.currentTemplate.id_address;
                        me.id_address_invoice = 0;
                        me.sendOrder();
                        return;
                    }

                    $.ajax({
                        url: '/address',
                        method: 'POST',
                        data: sendDataAddress
                    }).done(function(result){

                            var data = JSON.parse(result);

                            if(data.hasError){
                                if(data.errors && data.errors.length > 0){
                                    alert(data.errors[0]);
                                } else {
                                    alert('Ошибка Добавления адреса');
                                }
                                me.setBusy(false);
                            } else {

                                me.id_address_delivery = data.id_address_delivery;
                                me.id_address_invoice = data.id_address_invoice;
                                me.sendOrder();
                                //me.setBusy(true, 'Переадресация в ЛК...');
                                //document.location.href = '/my-account';
                            }

                        }).fail(function(){
                            me.setBusy(false);
                            alert('Ошибка добавления адреса');
                            //console.info('request fail', err);
                        }).always(function(data){
                            //console.info('request complete', arguments);

                        });
                }else {
                    if(me.type == 'with_reg'){
                        var sendDataReg = {
                            controller: 'authentication',
                            firstname: fio.firstname,
                            lastname: fio.lastname,
                            phone: me.data.phone,
                            email: me.data.email,
                            passwd: me.data.pass1,
                            email_create:1,
                            id_country: 216,
                            address1: 'Новая Почта',
                            address2: 'Отделение Новой Почты: ' + me.data.post_office,
                            city: me.data.city,
                            ajax: true,
                            alias: 'Мой адресс ' + formatDate(d),
                            is_new_custumer: 1,
                            back: 'my-account',
                            submitAccount: ''
                        };
                    }else{
                        var sendDataReg = {
                            controller: 'authentication',
                            firstname: fio.firstname,
                            lastname: fio.lastname,
                            phone: me.data.phone,
                            guest_email: me.data.email,
                            email_create:1,
                            //passwd: 'no_password',
                            id_country: 216,
                            address1: 'Новая Почта',
                            address2: 'Отделение Новой Почты: ' + me.data.post_office,
                            city: me.data.city,
                            ajax: true,
                            alias: 'Мой адресс ' + formatDate(d),
                            is_new_customer: 0,
                            back: 'my-account',
                            submitGuestAccount: ''
                        };
                    }

                    console.log('Отправка', sendDataReg);


                    $.ajax({
                        url: '/authentication',
                        method: 'POST',
                        data: sendDataReg
                    }).done(function(result){

                            var data = JSON.parse(result);

                            if(data.hasError){
                                if(data.errors && data.errors.length > 0){
                                    alert(data.errors[0]);
                                } else {
                                    alert('Ошибка добавления адреса');
                                    console.log(data);
                                }
                                me.setBusy(false);
                            } else {

                                me.id_address_delivery = data.id_address_delivery;
                                me.id_address_invoice = data.id_address_invoice;
                                me.id_customer = data.id_customer;
                                //console.log('Получили мы от сервера', data);
                                me.sendOrder();
                                //me.setBusy(true, 'Переадресация в ЛК...');
                                //document.location.href = '/my-account';
                            }

                        }).fail(function(){
                            me.setBusy(false);
                            alert('Ошибка регистрации. Попробуйте позже');
                            //console.info('request fail', err);
                        }).always(function(data){
                            //console.info('request complete', arguments);

                        });
                }
                return;



            }
        },
        sendOrder: function(){//return;
            var me = this;
            var sendData = {
                controller: 'order-opc',
                id_carrier: 3,
                id_address_delivery: me.id_address_delivery,
                id_address_invoice: me.id_address_invoice,
                method: 'createOrder',
                payment: me.data.payment_method,
                module: 'bankwire',
                //method: 'updateCarrierAndGetPayments',
                ajax: true,
                submitAddress: ''
            };

            /*console.log('SEND To ORDER', sendData);
            me.setBusy('false');
            return;*/

            $.ajax({
                url: '/order-opc',
                method: 'POST',
                data: sendData
            }).done(function(result){

                    var data = JSON.parse(result);

                    if(data.hasError){
                        if(data.errors && data.errors.length > 0){
                            alert(data.errors[0]);
                        } else {
                            alert('Ошибка отправки заказа');
                        }
                        me.setBusy(false);
                    } else {
                        alert('Заказ успешно отправлен. В ближайшее время с Вами свяжется наш менеджер.');
                        me.setBusy(true, 'Переадресация...');
                        document.location.href = '/';
                    }

                }).fail(function(){
                    me.setBusy(false);
                    alert('Ошибка регистрации. Попробуйте позже');
                    //console.info('request fail', err);
                }).always(function(data){
                    //console.info('request complete', arguments);

                });
        },
        validate: function(){
            var me = this;
            var error = false;

            me.el.$allInputs.removeClass('error');

            if(me.type != 'logged'){

                if(!(Regexp.fio.test(me.data.fio))){
                    error = true;
                    me.el.$fioInput.addClass('error');
                }

                if(!(Regexp.email.test(me.data.email))){
                    error = true;
                    me.el.$emailInput.addClass('error');
                }

                if(!(Regexp.phone.test(me.data.phone))){
                    error = true;
                    me.el.$phoneInput.addClass('error');
                }

                if(me.type == 'with_reg'){
                    if(me.data.pass1.length < 5){
                        error = true;
                        me.el.$pass1Input.addClass('error');
                        me.el.$pass2Input.val('');
                    }else if(me.data.pass1 != me.data.pass2){
                        error = true;
                        me.el.$pass2Input.addClass('error');
                    }
                }

            }

            if(!(Regexp.postoffice.test(me.data.post_office))){
                error = true;
                me.el.$postofficeInput.addClass('error');
            }

            if(!(Regexp.city.test(me.data.city))){
                error = true;
                me.el.$cityInput.addClass('error');
            }

            return !error;
        },
        setBusy: function(isBusy, loadingText){
            var me = this;
            loadingText = loadingText || 'Ожидайте...';
            if(isBusy){
                me.isBusy = true;
                me.el.$submitButton.val(loadingText);
            }else{
                setTimeout(function(){
                    me.isBusy = false;
                    me.el.$submitButton.val(me.buttonText);
                }, 1000);
            }
        }
    };


    // Видеобзоры в продукте
    var $videoIframes = $('.page-product-box iframe');
    if($videoIframes.length > 0){
        $videoIframes.detach().prependTo('#x-prodVideo');
        $('#x-videoBox').slideDown(500);
    }

    // Сворачивалка фильра
    $('#sidebar').on('click', '.fa-chevron-circle-down', function(){
        $(this).parent().next().slideUp(500);
        $(this).removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
    });
    $('#sidebar').on('click', '.fa-chevron-circle-up', function(){
        $(this).parent().next().slideDown(500);
        $(this).removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
    });
    $('#sidebar').on('click', 'label a', function(event){
        event.preventDefault();
        $(this).parent().parent().find('input').trigger('click');
    });



    // Скроллинг
    var Scroll = {
        scrollTo: function(h, s){
            h = h || 0;
            s = s || 1000;
            $('body,html').animate({scrollTop: h}, s);
        },
        currentPos: function(){
            return (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        }
    };





    $(function(){
        Advice.init();
        Darkscreen.init(); // Darkscreen.show(); OR Darkscreen.hide();
        Registration.init();
        Login.init();
        Order.init();

    });


});


// usefully functions

function getRandomInt(min, max){ return Math.floor(Math.random() * (max - min + 1)) + min; }

function  formatDate(date) {
    var options = {
        year: '2-digit',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second:  '2-digit'
    };

    return date.toLocaleString('ru', options);
}

/* jQuery Checkbox Styler 1.1.2 *//*
(function($){$.fn.checkbox=function(){$(this).css({position:'absolute',left:'-9999px'}).each(function(){var input=$(this);if(input.next('span.checkbox').length<1){var span=$('<span class="checkbox" style="display:inline-block"></span>');input.after(span);if(input.is(':checked'))span.addClass('checked');if(input.is(':disabled'))span.addClass('disabled');span.click(function(){if(!span.is('.disabled')){if(input.is(':checked')){input.removeAttr('checked');span.removeClass('checked');}else{input.attr('checked',true);span.addClass('checked');}input.change();return false;}});input.parent('label').add('label[for="'+input.attr('id')+'"]').click(function(){span.click();return false;});input.change(function(){if(input.is(':checked'))span.addClass('checked');else span.removeClass('checked');}).keydown(function(e){if(input.parent('label').length&&(e.which==13||e.which==32))span.click();}).focus(function(){if(!span.is('.disabled'))span.addClass('focused');}).blur(function(){span.removeClass('focused');});input.live('refresh',function(){if(input.is(':checked'))span.addClass('checked');else span.removeClass('checked');if(input.is(':disabled'))span.addClass('disabled');else span.removeClass('disabled');})}});}})(jQuery)

$(function(){
    $('input[type="checkbox"]').checkbox();
});*/