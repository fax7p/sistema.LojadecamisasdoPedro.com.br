// Configuração do Firebase
const firebaseConfig = {
  apiKey: "AIzaSyDbQH77KFP_7B9FDkOoTWjhWKFFCZ32_zM",
  authDomain: "lojadecamisasdopedro.firebaseapp.com",
  databaseURL: "https://lojadecamisasdopedro-default-rtdb.firebaseio.com",
  projectId: "lojadecamisasdopedro",
  storageBucket: "lojadecamisasdopedro.firebasestorage.app",
  messagingSenderId: "797997416882",
  appId: "1:797997416882:web:393cc15187b973dcfb64ab"
};

// Inicializa o Firebase
firebase.initializeApp(firebaseConfig);
const db = firebase.database();