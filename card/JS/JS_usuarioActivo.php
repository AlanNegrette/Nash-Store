<script>
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-analytics.js";
import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-database.js";
import { getAuth, createUserWithEmailAndPassword,  signInWithEmailAndPassword, onAuthStateChanged, signOut, GoogleAuthProvider,  signInWithRedirect, getRedirectResult } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyB2ASZtUtG7nWSlUff-ptZmSPQvZEoct5g",
    authDomain: "login-21969.firebaseapp.com",
    databaseURL: "https://login-21969-default-rtdb.firebaseio.com",
    projectId: "login-21969",
    storageBucket: "login-21969.appspot.com",
    messagingSenderId: "592377774992",
    appId: "1:592377774992:web:b3fb488dec3682a2d12915",
    measurementId: "G-EFEFTCWT3V"
    };

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const database = getDatabase(app);
const auth = getAuth();



    const boton = document.getElementById('saveData')
    //Registrarse
    boton.addEventListener('click', (e) =>{
        e.preventDefault()
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let username = document.getElementById('username').value;
        createUserWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                // Signed in
                const user = userCredential.user
                set(ref(database, 'users/' + user.uid),{
                    username: username,
                    email: email               
                })

                alert("Usuario registrado")
                // ...
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                alert(errorMessage)
                // ..
            })
        })



    const boton2 = document.getElementById('saveData2')
    boton2.addEventListener('click', (e)=>{
        e.preventDefault()
        let email2 = document.getElementById('email2').value;
        let password2 = document.getElementById('password2').value;

        signInWithEmailAndPassword(auth, email2, password2)
            .then((userCredential) => {
                // Signed in


                const user = userCredential.user

                const dt = new Date()
                update(ref(database, 'users/' + user.uid),{
                    last_login: dt,
                })

                console.log(user)
                alert("Usuario logueado")
                window.location.href="http://localhost/Nash-store/card/V_paginaPrincipal.php";
                // ...
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                alert(errorMessage)


            })
    })

    const boton3 = document.getElementById('logout')
    boton3.addEventListener('click', (e) =>{
        e.preventDefault()
        alert(user)
        signOut(auth).then(() => {
        // Sign-out successful.
            alert("Que tenga buen dia")
            alert(user)
        }).catch((error) => {
        // An error happened.
            alert("Error al cerrar sesion")
        });
    })
    
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

    }
    });
</script>