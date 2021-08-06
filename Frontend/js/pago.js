Conekta.setPublicKey("key_KRNM8gT3dgrXuzcXsteJw9w");
        
        var conektaSuccessResponseHandler= function(token){
           
            $("#conektaTokenId").val(token.id);
           
            jsPay();
        };

        var conektaErrorResponseHandler =function(response){
            var $form=$("#card-form");

            alert(response.message_to_purchaser);
        }

        $(document).ready(function(){

            $("#card-form").submit(function(e){
                e.preventDefault();
                
                var $form=$("#card-form");

                Conekta.Token.create($form,conektaSuccessResponseHandler,conektaErrorResponseHandler);
            })
            
        })

        function jsPay(){
            let params=$("#card-form").serialize();
            let url="../Backend/pay.php";
            
            $.post(url,params,function(data){
                if(data=="1"){
                    alert("Se realizo el pago :D");
                    jsClean();
                }else{
                    alert(data)
                }
            
            })

        }

        function jsClean(){
            $(".form-control").prop("value","");
            $("#conektaTokenId").prop("value","");
        }