<html>
<body>

<h1>Thank you for filling the form <?php echo $_POST["InputName"]; ?><br>
We will get back to you shortly on your email <?php echo $_POST["InputEmail"]; ?> </h1>
<br>
<h1>Redirecting back....</h1>
<a href="index.html">If it doesn't redirect back to homepage automatically click here </a>

<script>
    setTimeout(function(){
       window.location.href = 'index.html';
    }, 20000);
</script>
</body>
</html>