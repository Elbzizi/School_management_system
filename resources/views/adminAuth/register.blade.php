<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.3.7/jquery.datetimepicker.min.css"/>
  
<!-- Load JS second -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Initialize JS, setup eventlistener(s) -->
<script type="text/javascript">
 jQuery(document).ready($ => $('#datetimepicker').datetimepicker());
</script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <style>
        body{
            background: -webkit-linear-gradient(left, #ededf0, #c4c9ca);
   
        }
        .register{
    margin-top: 10px;
    padding: 5%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.label{
  border: none;
  display: flex;
  padding: 0.75rem 1.5rem;
  background-color: #f8f9fa;
  color: black;
  font-size: 0.75rem;
  line-height: 1rem;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  vertical-align: middle;
  align-items: center;
  border-radius: 0.5rem;
  user-select: none;
  gap: 0.75rem;
  transition: all .6s ease;

}
label{
    margin-bottom: 0px;
}

.label:hover {
  box-shadow: 0 10px 15px -3px #488aec4f, 0 4px 6px -2px #488aec17;
}

.label:focus,button:active {
  opacity: .85;
  box-shadow: none;
}

.label svg {
  width: 1.25rem;
  height: 1.25rem;
}
.formField {
  position: relative;
}

.formField input {
  padding: 13px 90px 9px 10px;
  outline: none;
  border: none;
  border-radius: 5px;
  background-color: #f8f9fa;
  color: #333;
  font-size: 16px;
  font-weight: 550;
  transition: 0.3s ease-in-out;
  box-shadow: 0 0 0 5px transparent;
}

.formField input:hover,
.formField input:focus {
  box-shadow: 0 0 0 2px #333;
}

.formField span {
  position: absolute;
  left: 0;
  top: 0;
  padding: 13px 15px;
  color: #333;
  font-size: 14px;
  font-weight: 600;
  text-shadow: -1px -1px 0 #f1f1f1, 1px -1px 0 #f1f1f1, -1px 1px 0 #f1f1f1,
    1px 1px 0 #f1f1f1;
  transition: 0.3s ease-in-out;
  pointer-events: none;
}

.formField input:focus + span,
.formField input:valid + span {
  transform: translateY(-12px) translateX(-5px) scale(0.95);
  transition: 0.3s ease-in-out;
}
.radio-inputs {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  border-radius: 0.5rem;
  background-color: #EEE;
  box-sizing: border-box;
  box-shadow: 0 0 0px 1px rgba(0, 0, 0, 0.06);
  padding: 0.25rem;
  width: 300px;
  font-size: 14px;
}

.radio-inputs .radio {
  flex: 1 1 auto;
  text-align: center;
}

.radio-inputs .radio input {
  display: none;
}

.radio-inputs .radio .name {
  display: flex;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border-radius: 0.5rem;
  border: none;
  padding: .5rem 0;
  color: rgba(51, 65, 85, 1);
  transition: all .15s ease-in-out;
}

.radio-inputs .radio input:checked + .name {
  background-color: #fff;
  font-weight: 600;
}

    </style>
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Registration</h3>
                        <p></p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <form class="row register-form" action="{{ route('admin.register')}}" method="post">
                                    @csrf

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required="" type="text" name="name" />
                                                <span>Nom</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required="" type="text" name="prenom"/>
                                                <span>Prenom</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required="" type="text" name="cin" />
                                                <span>cin</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="radio-inputs">
                                                <label class="radio">
                                                    <input type="radio" name="sexe" value="homme" checked="">
                                                    <span class="name">homme</span>
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="sexe" value="femme" >
                                                    <span class="name">femme</span>
                                                </label>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="photo" class="label" style="margin-top: 15px">  
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#fffffff" stroke-width="2"></path>
                                                  <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                  Choisi photo 
                                                  </label>
                                                <input type="file" placeholder="Photo" id="photo" name="photo" style="position: absolute; left: -9999px; opacity: 0;">
                                            </div>
                                            <div class="form-group">
                                                <div class="formField">
                                                    <input required="" name="email" type="email" />
                                                    <span>Email</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required="" type="text" id="datetimepicker" />
                                                <span>Date naissance</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required="" type="text" name="adress" />
                                                <span>Adress</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required="" type="text" name="tel"/>
                                                <span>Telephone</span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="radio-inputs">
                                                <label class="radio">
                                                    <input type="radio" name="role" value="surveillant" checked="">
                                                    <span class="name">surveillant</span>
                                                </label>
                                                <label class="radio">
                                                  <input type="radio" name="role" value="directeur" >
                                                  <span class="name">directeur</span>
                                                </label>
                                                
                                                <label class="radio">
                                                    <input type="radio" name="role">
                                                    <span class="name">Ensignant</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="formField">
                                                <input disabled name="statut" type="text" />
                                                <span>Statut</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="formField">
                                                <input required=""  name="password" type="password" />
                                                <span>Password</span>
                                            </div>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>