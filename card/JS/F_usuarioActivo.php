<?php
require_once("JS_login.php");
?>
<script>
const user = auth.currentUser;
    onAuthStateChanged(auth, (user) => {
    if (user) {
        // User is signed in, see docs for a list of available properties
        // https://firebase.google.com/docs/reference/js/firebase.User
        const uid = user.uid;
        console.log("UID " + uid)
        console.log(user)
        // ...
    } else {
        window.location.replace("http://localhost/Nash-store/card/V_login.php");
        // User is signed out
        // ...
        
    }
    });

</script>    