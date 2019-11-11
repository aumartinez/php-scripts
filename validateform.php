<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title>Form Validation</title>
    
    <link ref="stylesheet" type="text/css" href="css/form.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  </head>
  
  <body>
    <div class="wrapper">
      <h1 class="text-center">
        Form validation example, using JS and PHP
      </h1>
      
      <hr />
      
      <div class="form">
        <form id="userForm" action="form-process.php" method="post">
          <fieldset>
            <legend>
              User Information
            </legend>
            <div id="errorDiv">
            </div>
            
            <div class="form-group">
              <label for="name">
                Name: <span>*</span>
              </label>
              <input id="name" name="name" type="text" />
              <div id="nameError" class="errorMess">
                <span>Name is required</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="city">
                City:
              </label>
              <input id="city" name="city" type="text" />              
            </div>
            
            <div class="form-group">
              <label for="city">
                City:
              </label>
              <input id="city" name="city" type="text" />              
            </div>
            
            <div class="form-group">
              <label for="state">
                State:
              </label>
              <select id="state" name="state">
                <option>--Select--</option>
                <option value="Alabama">Alabama</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Florida">Florida</option>
                <option value="Illinois">Illinois</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New York">New York</option>
                <option value="Wisconsin">Wisconsin</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="zip">
                ZIP:
              </label>
              <input id="zip" name="zip" type="text" />
            </div>
            
            <div class="form-group">
              <label for="emai">
                E-mail address: <span>*</span>
              </label>
              <input id="email" name="email" type="text" />
              <div id="emailError" class="errorMess">
                <span>E-mail is required</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="phone">
                Telephone number:
              </label>
              <input id="phone" name="phone" type="text" />
              <div id="phoneError" class="errorMess">
                <span>Format: XXX-XXX-XXXX</span>
              </div>
            </div>
            
            <div class="form-group">
              <label>
                Number type:
              </label>
              <div>
                <input id="work" name="phonetype" value="work" type="radio" class="radio-btn" />
                <label class="radio-lbl" for="work">
                  Work
                </label>
              </div>
              <div>
                <input id="home" name="phonetype" value="home" type="radio" class="radio-btn"/>
                <label class="radio-lbl" for="home">
                  Home
                </label>
              </div>
              <div id="phonetypeError" class="errorMess">
                <span>Please choose an option</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="password">
                Password: <span>*</span>
              </label>
              <input id="password" name="password" type="password" />
              <div id="passError" class="errorMess">
                <span>Password is required</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="verify">
                Verify password: <span>*</span>
              </label>
              <input id="verify" name="verify" type="password" />
              <div id="verifyError" class="errorMess">
                <span>Passwords don't match</span>
              </div>
            </div>
            
            <div class="form-group">
              <button id="submitForm" name="submitForm" type="submit">
                Submit
              </button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
