

document.addEventListener("DOMContentLoaded", (load) => {


  let content = ''
  let parentUsers = document.getElementById('team');
  let tm  = 0.1;
  let dummyImage = 'https://avatar.iran.liara.run/public';
  let nameLastName = 'Jon';
  let nameFirstName = 'Doe';
  let nameCompany = 'Carpenter';

  fetch('https://dummyjson.com/users')
  .then(res => res.json())
  .then(res=>{

  
   
    res.users.forEach(user => {


      tm += 0.1;
      content += `
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="${tm}s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" style='width:100%' src="${user?.image ? user.image : dummyImage}" alt="${user.firstName ? user.firstName : nameLastName}">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">${user?.firstName ? user?.firstName : nameFirstName} ${user?.lastName ? user?.lastName : nameLastName}</h5>
                            <small>${user?.company ? user?.company?.title : nameCompany}</small>
                        </div>
                    </div>
                </div>
          
          
          
          `;
    });

    parentUsers.innerHTML = content;
  
  
  
  });
});
