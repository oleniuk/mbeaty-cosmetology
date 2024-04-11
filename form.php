<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta name="facebook-domain-verification" content="0ml4k8woyoyztd2188rro3yas5qoql" />
    <meta name="viewport" content="width=device-width">
        <title>Вітаємо! Ваша заявка прийнята!</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">        <style type="text/css">
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f9fafc;
            }
           .wrapper{margin: 0 auto;}
            h2 {
                margin: 0;
                padding: 0;
                font-size: 36px;
                line-height: 44px;
                color: #fe68a4;
                text-align: center;
                font-weight: bold;
            }
            a {
                color: #fe68a4;
            }

            .list_info {
               text-align: left;
               display: inline-block;
               list-style: none;
               margin-top: -10px;
               margin-bottom: -11px;
            } 
            .list_info li {
                margin: 11px 0px;
            } 
      #client{
          margin: 0;
                padding: 0;
                font-size: 22px;
                color: #fe68a4;
                text-align: center;
                font-weight: bold;
      }
      #tel{
          margin: 0;
                padding: 0;
                font-size: 22px;
                color: #fe68a4;
                text-align: center;
                font-weight: bold;
      }
            .fail {
                margin: 10px 0 20px 0px;
                text-align: center;
            }
            .email {
                position: relative;
                text-align: center;
                margin-top: 40px;
            }
            .email input {
                height: 30px;
                width: 200px;
                font-size: 14px;
                padding-right: 10px;
                padding-left: 10px;
                outline: none;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #B6B6B6;
                margin-bottom: 10px;
            }
            .block_success {
                max-width: 960px;
                padding: 70px 30px 70px 30px;
                margin: -50px auto;
            }
            .success {
                text-align: center;
                color: #000;
            }


            .js-buy {
	display: inline-block;
	background-color: #EA4C89;padding: 15px 15px;
	list-style: none;
	color: #fff;
	font-weight: 400;font-family: 'Nunito', sans-serif;
	border-radius: 5px;
    display: flex;
	justify-content: center;
	text-decoration: none;
    font-weight: 700;
    box-shadow: 0px 6px 12.74px 0.26px rgba(0, 0, 0, 0.21);
    margin-top:30px ;

}
.img{
    text-align: center;
    width: 100%;
    height: auto;
    margin-top: 20px;
}
.nahi{
    text-align: center;
    font-size: 18px;
}
.uro{text-align: center;font-size: 15px;}
.span-2{font-size: 25px;color: #EA4C89;}
.order_form{display:flex;align-items: center;flex-direction: column;margin-top: 30px;}
.field{border-radius: 20px;padding:15px 20px}
.span-1{font-size: 30px;color: #43c11d;}
.button {     display: block;
    margin: 10px auto;
    margin-top: 25px;
    padding: -10px 20px;
    padding: 0 25px;
    border: none;
    border-radius: 30px;
    line-height: 56px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    background: linear-gradient(45deg, #ff545b 0%, #ff545b 100%);
    -webkit-box-shadow: 0 0 0 10px rgb(106 247 141 / 51%);
    -moz-box-shadow: 0 0 0 10px rgba(106, 247, 141, 0.507);
    box-shadow: 0 0 0 10px rgb(41 44 42 / 51%);
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-size: 18px;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 5px 20px #292929; }
  .li{style:none ;}
        </style>  

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '##########');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=##########&ev=Lead&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
		
    </head>
    <body>
    <div class="wrapper">
        <div class="block_success">          
            <h2 style="text-transform: uppercase;">Вітаємо! Ваша заявка прийнята!</h2>
            <p class="success">
            Найближчим часом наш менеджер зв'яжеться з Вами!
            </p>
            <h3 class="success">
            Будь ласка, перевірте правильність введеної інформації.
            </h3>
            <div class="success">
                <ul class="list_info">
                    <li><span>П.І.Б.:  </span><span id="client"><?=$_GET['name']?></span></li>
                    <li><span>Телефон: </span><span id="tel"><?=$_GET['phone']?></span></li>
                </ul>
                <br/><span id="submit"></span>
            </div>
            <p class="fail success">Якщо ви помилилися під час заповнення форми, то, будь ласка, <a href="javascript: history.back(-1);">заповніть заявку ще раз</a></p>      
       
        </div>
		


    



    </div>
</body>
</html>