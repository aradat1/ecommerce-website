const firstName = document.getElementById('firstName')
const lastName = document.getElementById('lastName')
const email = document.getElementById('email')
const mobile = document.getElementById('mobile')
const address = document.getElementById('address')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  
  if (firstName.value === 'arad' ) {
    messages.push('Name is required')
  }

 // if (password.value.length <= 6) {
 //   messages.push('Password must be longer than 6 characters')
//  }
    if (email.indexOf(".", email.indexOf("@")) === -1) {
        messages.push('Invalid email address: missing domain name.')
    }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})