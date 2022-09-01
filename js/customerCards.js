let customerCard = document.getElementById('customerCard')

fetch('/Bubblefish-intake/customerData.json')
  .then((response) => response.json())
  .then((data) => drawCustomer(data.customers));

  function drawCustomer(customers) {
    console.log(customers)
    customers.forEach(customer => {
        const cardDiv = document.createElement('div')
        cardDiv.classList.add('border-0', 'row', 'align-content-center', 'justify-content-center', 'ps-4', 'py-3', 'my-2', 'card-login')

        const imgDiv = document.createElement('div')
        imgDiv.classList.add('col-2', 'p-0', 'me-3')

        const profileImg = document.createElement('img')
        profileImg.classList.add('img-fluid', 'profile-image', 'rounded-circle')
        profileImg.src ='/Bubblefish-intake/assets/profilepics/test.jpg'

        const textDiv = document.createElement('div')
        textDiv.classList.add('col-9', 'p-0', 'align-self-center')

        const timePara = document.createElement('p')
        timePara.classList.add('ps-3', 'mb-0', 'fw-semibold' ,'time-text')
        timePara.innerHTML = customer.lastVisit

        const namePara = document.createElement('p')
        namePara.classList.add('mb-0', 'mt-1', 'fw-bold')
        namePara.innerHTML = customer.name

        const companyPara = document.createElement('p')
        companyPara.classList.add('mb-0')
        companyPara.innerHTML = customer.company

        imgDiv.appendChild(profileImg)

        textDiv.appendChild(imgDiv)
        textDiv.appendChild(timePara)
        textDiv.appendChild(namePara)
        textDiv.appendChild(companyPara)

        cardDiv.appendChild(textDiv)
        customerCard.appendChild(cardDiv)
    });
  }