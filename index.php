<html>
    <head>
        <title>Currency Converter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CurrencyConverter.css">
    </head>
    <body>
        <div class="container-fluid shadow p-3 mb-5 bg-white rounded">
            <div class="shadow p-3 mb-5 bg-white rounded abc"></div>
            <h3 class="currencytest">Currency Converter</h3>
            <form>
                <input type="text" class="values" onkeypress="return /[0-9.]/i.test(event.key)"  id="inputs">
                <select select name="" onchange="firstone(this.value);"  id="first" class="from">
                  <option value="From">From</option>
                  <option value="₹" id="inr">INR-Indian Rupee</option>
                  <option value="$">USD-US Dollar</option>
                  <option value="€">EUR-Euro</option>
                  <option value="£">GBP-British Pound</option>
                  <option value="$">AUD-Australian Dollar</option>
                  <option value="$">CAD-Canadian Dollar</option>
                  <option value="$">SGD-Singapore Dollar</option>
                  <option value="CHF">CHF-Swiss</option>
                  <option value="RM">MYR-Malaysian Ringgit</option>
                  <option value="¥">JPY-Japanese Yen</option>
                </select>
                <form>
                    <select id="abc" onchange="second()" class="to">
                        <option value="From">To</option>
                        <option value="INR-Indian Rupee">INR-Indian Rupee</option>
                        <option value="USD-US Dollar">USD-US Dollar</option>
                        <option value="EUR-Euro">EUR-Euro</option>
                        <option value="GBP-British Pound">GBP-British Pound</option>
                        <option value="AUD-Australian Dolla">AUD-Australian Dollar</option>
                        <option value="CAD-Canadian Dollar">CAD-Canadian Dollar</option>
                        <option value="SGD-Singapore Dollar">SGD-Singapore Dollar</option>
                        <option value="CHF-Swiss">CHF-Swiss</option>
                        <option value="MYR-Malaysian Ringgit">MYR-Malaysian Ringgit</option>
                        <option value="JPY-Japanese Yen">JPY-Japanese Yen</option>
                 
                    </select>
                  </form>
              </form>
              <button id="check" onclick="calculate()" class="convert">Convert</button>
              <p class="result" id="conversion"></p>

              
           
        </div>
              <script>
               function firstone(element){
                //document.getElementById("inputs").value = element+ document.getElementById("inputs").value ;//
                var From=document.getElementById("first");
                   var From=From.options[From.selectedIndex].text;
                   console.log("firstfunction"+From)
               }
               function second(){
                var To=document.getElementById("abc");
                   var To=To.options[To.selectedIndex].text;
                   console.log("secondfunction"+To)

               }
               function calculate(){
                   var output=document.getElementById("inputs").value
                   var one=document.getElementById("first");
                   var From=one.options[one.selectedIndex].text;
                   console.log(From)
                   var two=document.getElementById("abc");
                   var To=two.options[two.selectedIndex].text;
                   console.log(To)
                   console.log("firstoutput"+typeof(output))
                   var integer=parseFloat(output,10);
                   console.log("int"+integer)
                   switch (true) {
                        case (From === 'INR-Indian Rupee' && To === 'INR-Indian Rupee'):
                            document.getElementById("conversion").innerHTML=integer*1+" "+"Indian Rupee"
                            break;
                        case (From === 'INR-Indian Rupee' && To === 'USD-US Dollar'):
                            document.getElementById("conversion").innerHTML=integer*0.014+" "+"US Dollar"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'EUR-Euro'):
                            document.getElementById("conversion").innerHTML=integer*0.012+" "+"EUR-Euro"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'GBP-British Pound'):
                            document.getElementById("conversion").innerHTML=integer*0.0100+" "+"Pound sterling"
                               break;
                         case (From === 'INR-Indian Rupee' && To === 'AUD-Australian Dollar'):
                         document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.017+" "+"Canadian Dollar"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.019+" "+"Singapore Dollar"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.013+" "+"Swiss Franc"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.057+" "+"Malaysian Ringgit"
                               break;
                        case (From === 'INR-Indian Rupee' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*1.50+" "+"Japanese Yen"
                               break;
                        case (From === 'USD-US Dollar' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*72.37+" "+"Indian Rupee"
                               break;
                        case (From === 'USD-US Dollar' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.84+" "+"Euro'"
                               break;
                        case (From === 'USD-US Dollar' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*1.0+" "+"USD-US Dollar"
                               break;
                        case (From === 'USD-US Dollar' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.72+" "+"Pound Sterling"
                               break;
                        case (From === 'USD-US Dollar' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*1.30+" "+"Australian Dollar"
                               break;
                        case (From === 'USD-US Dollar' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*1.26+" "+"Canadian Dollar"
                               break;
                        case (From === 'USD-US Dollar' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*1.34+" "+"Singapore Dollar"
                               break;
                        case (From === 'USD-US Dollar' && To === 'CHF-Swiss Franc'):
                        document.getElementById("conversion").innerHTML=integer*0.92+" "+"Swiss Franc"
                               break;
                        case (From === 'USD-US Dollar' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*4.13+" "+"Malaysian Ringgit"
                               break;
                        case (From === 'USD-US Dollar' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*108.74+" "+"Japanese Yen"
                               break;
                        case (From === 'EUR-Euro' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'EUR-Euro' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'GBP-British Pound' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'AUD-Australian Dollar' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CAD-Canadian Dollar' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'SGD-Singapore Dollar' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'CHF-Swiss' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'MYR-Malaysian Ringgit' && To === 'JPY-Japanese Yen'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'INR-Indian Rupee'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'USD-US Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'EUR-Euro'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'GBP-British Pound'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'AUD-Australian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'CAD-Canadian Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'SGD-Singapore Dollar'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'CHF-Swiss'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'MYR-Malaysian Ringgit'):
                        document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;
                        case (From === 'JPY-Japanese Yen' && To === 'JPY-Japanese Yen'):
                            document.getElementById("conversion").innerHTML=integer*0.018+" "+"Australian Dollar"
                               break;

                               
                        default:
                                   }

                  
                  

               }
              
               




         
            </script>
    </body>
</html>
