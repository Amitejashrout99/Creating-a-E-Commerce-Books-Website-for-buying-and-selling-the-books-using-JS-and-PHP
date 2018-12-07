<html>
    <head>
        <title>Selling Portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <style>
        .jumbotron {
            background-image: url("img/sell_jumbotron.jpg");
            color: white;
            width:1366px;
            margin-left:-120px;
            height: 400px; 
        }
        #start-selling-btn,#post-ad-btn{
            margin-top: 25px;
            background-color: #0069D9;
            width:138px;
            height:47px;
            padding:.5rem 1rem;
            border-radius: .3rem;
            border:none;
            color:white;
            font-size: 120%;
        }
        #start-selling-btn:hover,#post-ad-btn:hover{
            background-color: rgb(0, 91, 183);
        }
        
        .form-container{
            padding: 20px 40px;
            margin: 0 auto;
            width:600px;
            height: 800px;
        }
        
        .f-input{
            background-color: rgb(238, 235, 231);
            padding: 15px;
            width: 470px;
            height: 38px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 120%;
            border: solid 2.5px rgb(29, 28, 28);
        }
        .f-input:focus,.text-area:focus{
            border: #0069D9 solid 2.5px;
        }
        
        .wrapper{
            text-align: center;
        }
        .text-area{
            border-radius: 10px; 
            padding: 15px;
            margin-bottom: 20px;
            font-size: 120%;
            background-color: rgb(238, 235, 231);
            border: solid 1.5px;
        }
        
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
            <center>
              <h1>Welcome to the Selling Portal</h1>      
              <p>You can sell your books on this page</p>
              <button id="start-selling-btn">Start Selling</button>
            </div>  
        </center>    
          </div>
          
          <div class="form-container">
            <form>
                <fieldset>
                    <legend>Category</legend>
                    <input type="text" class="f-input" placeholder="Books, Sports → Books"><br>
                    <textarea class="text-area" rows="5" cols="52" placeholder="Description" ></textarea>
                    <input list="tags" class="f-input" placeholder="Tags">
                    <datalist id="tags">
                    <option value="New">
                    <option value="Used">
                    <option value="Unabridged">
                    </datalist>
                    <input type="number" placeholder="Price (₹)" class="f-input">
                </fieldset>
                <br>
                <fieldset>
                    <legend>Location</legend>
                    <input type="text" class="f-input" placeholder="Place">
                    <input type="text" class="f-input" placeholder="City">
                    <input type="text" class="f-input" placeholder="State">
                    <input type="number" class="f-input" placeholder="PIN">
                </fieldset>
                <div class="wrapper">
                    <button id="post-ad-btn">Post Your Ad</button>
                </div>
            </form>
        </div>
    </center>
    </body>
</html>