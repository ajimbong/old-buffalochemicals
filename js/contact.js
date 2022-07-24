const name = document.getElementById('name')
const email = document.getElementById('email')
const subject = document.getElementById('subject')
const message = document.getElementById('message')

const form = document.getElementById('form')

form.addEventListener('submit', e =>{
    e.preventDefault();
   
   const formData = new URLSearchParams()
   if(name.value && email.value && subject.value && message.value){
       //console.log(name.value, email.value, subject.value, message.value)
       formData.append('name', name.value)
       formData.append('email', email.value)
       formData.append('subject', subject.value)
       formData.append('message', message.value)
       
          fetch('https://test.buffalochmicals.com/server/form.php', {method : 'POST', body: formData})
          .then(res => res.json())
          .then(data => {
              alert(data.msg)
               name.value = ''
               email.value = ''
               subject.value = ''
               message.value = ''
          })
          .catch(err => console.error(err))
   }else{
       window.alert("Sorry an error occured. Please make sure you filled the inputs correctly")
   }
   

   //console.log(formData.keys)
   //console.log(formData)
   

})