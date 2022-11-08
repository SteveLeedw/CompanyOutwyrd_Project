<!-- the bar to be included on each other page, should display a dropdown menu on left, a website logo in middle, and login/signup/list options on right -->
<head>
        <style>
            .commericalsimpleheader {
            display: grid;
            grid-template-columns: 30% 40% 30%;
            grid-template-rows: auto;
            
            background-color: gray;
            
            }
            .commericalsimpleheader > div {
            font-family:'Segoe UI', sans-serif;
            
            padding: 1rem;

            }
            #leftdiv{
            text-align: left;

            }
            #middlediv{
            text-align: center;

            }
            #rightdiv{
            text-align: right;

            }
           

            .header{
                box-sizing: border-box;
                background-color: gray;
                position: relative;
                padding: 1rem;
                margin-right:1rem;
                margin-left:0rem;
                width: 100%;
                text-align: right;
                font-family:'Segoe UI', sans-serif;
                float:left;

            }
            .navBar{
                box-sizing: border-box;
                background-color: gray;
                position: relative;
                padding: 1rem;
                margin-right:1rem;
                margin-left:0rem;
                width: fit-content;
                text-align: right;
                font-family:'Segoe UI', sans-serif;
                float:left;

            }


        </style>
    </head>
    <body>
        <div class="commericalsimpleheader">
            <div id="leftdiv">Drop Down Menu</div>
            <div id="middlediv">Commerical Simple</div>
            <div id="rightdiv"><a href = "./login.php">Login</a>/<a href = "./createUserFrontend.php">Sign Up</a>/<font COLOR="red"><b>Upload Listing</b></font></div><!-- make these href once login signup and upload is finished -->
            
        </div>
    </body>
