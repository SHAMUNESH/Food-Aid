var firebaseConfig = {
    apiKey: "AIzaSyCNnd4FAl7ee7XgR1ODgdnA7FXEE4dtzPQ",
    authDomain: "form-firebase-35e42.firebaseapp.com",
    projectId: "form-firebase-35e42",
    storageBucket: "form-firebase-35e42.appspot.com",
    messagingSenderId: "723421131315",
    appId: "1:723421131315:web:b96cc0e1fc5bd4ac78a946"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


  
  // Reference messages collection
  var messagesRef = firebase.database().ref('messages');
  
  // Listen for form submit
  document.getElementById('form-firebase').addEventListener('submit', submitForm);
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
    // Get values
    var email = getInputVal('email');
    var name = getInputVal('name');
    var message = getInputVal('message');
  
    // Save message
    saveMessage( email, name, message);
  
    // Show alert
    document.querySelector('.alert').style.display = 'block';
  
    // Hide alert after 3 seconds
    setTimeout(function(){
      document.querySelector('.alert').style.display = 'none';
    },3000);
  
    // Clear form
    document.getElementById('form-firebase').reset();
  }
  
  // Function to get get form values
  function getInputVal(id){
    return document.getElementById(id).value;
  }
  
  // Save message to firebase
  function saveMessage( email, name, message){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
      
      email:email,
      name: name,
      message:message
    });
  }