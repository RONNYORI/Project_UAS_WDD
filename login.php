<!DOCTYPE html>
<html>
    <head>
        <title>Login Page </title>
        
    <link rel="stylesheet" href="login.css">
    </head>
    <body>

    <nav class="navbar">
        <div class="logo">
        </div>

	</nav>	

        <br><br>

        <div class="form">
        <h3 align="center"> Create New Account</h3>
        
        <form action="action.php"  method="POST" name="form_input">

       
          <label for="name">NAME</label> <br>
          <input id="name" type="text" name="name" placeholder=" full name"/>
            <br />
            <label for="email">Email</label><br />
            <input id="email" type="email" name="email" placeholder=" email address"/>
            <br />
            <label for="password">PASSWORD</label><br />
            <input id="password" type="password" name="password" placeholder=" make a strong password"/>
            <br />   
            <label for="date">DATE OF BIRTH</label><br />
            <input id="date" type="date" name="date" value=" select "/>
            <br />         
            <br />
            <input id="submit" type="submit" value="Send" name="submit" href="#"/>
             
       
            


        
            <script>
                function viewInput(){
                    var status = document.getElementById("formInput").style.display;
                            if (!status) {
                                document.getElementById("formInput").style.display = "none";
                            } else if (status == 'block') {
                                document.getElementById("formInput").style.display = "none";
                            } else {
                                document.getElementById("formInput").style.display = "";
                            }
                }
            </script>
        </form>
        </div>

        <hr>

    <footer >
    <div class="socials">
	<a href="#">
		<i data-feather="instagram"></i></a>
	<a href="#">
		<i data-feather="facebook"></i></a>
	<a href="#">
		<i data-feather="twitter"></i></a>
   
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126214.34859700906!2d115.14186952991787!3d-8.672674466806763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409b0e5e80db%3A0xe27334e8ccb9374a!2sDenpasar%2C%20Kota%20Denpasar%2C%20Bali!5e0!3m2!1sid!2sid!4v1730610558144!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
		class="map"></iframe>
    
        <p style="text-align: center;">Copyright &copy; 2025 Wander Taste.</p>

    </footer>


    </body>
</html>

          
