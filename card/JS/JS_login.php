<script type="module">
  // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-analytics.js";
    import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword,  signInWithEmailAndPassword, onAuthStateChanged, signOut, GoogleAuthProvider,  signInWithRedirect, getRedirectResult } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBHwt7EBx6dKFPItt24QU7bWV31u6rVCXI",
    authDomain: "login-nash-store.firebaseapp.com",
    databaseURL: "https://login-nash-store-default-rtdb.firebaseio.com",
    projectId: "login-nash-store",
    storageBucket: "login-nash-store.appspot.com",
    messagingSenderId: "574551718061",
    appId: "1:574551718061:web:8baae8f39c2025a3b5ee24"
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
                    id:user.uid,
                    username: username,
                    email: email
                })
                alert("USUARIO REGISTRADO");
                //window.location.href="http://localhost/Nash-store/card/controladores/C_datosFirebase.php";
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                alert("MAIL YA EN USO")
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
                
                window.location.href="http://localhost/Nash-store/card/V_paginaPrincipal.php";
                // ...
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                alert("Contraseña o mail incorrecto")
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

  </script>