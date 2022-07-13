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
const user = auth.currentUser;


    onAuthStateChanged(auth, (user) => {
    if (user) {
        const uid = user.uid;
        console.log("UID " + uid)
        console.log(user)
        // ...
    } else {
        window.location.replace("http://localhost/Nash-store/card/V_login.php");
    }
    });
  