const getContent = async () => {
  const response = await fetch("https://jsonplaceholder.typicode.com/users")
    .then((response) => {
      return response.json();
    })
    .catch((error) => {
      console.error("Error:", error);
    });

  const container = document.getElementById("team");

  console.log(container);

  let filtrado = response.filter((value) => {
    let regexMatchesParentheses = RegExp(/\)|\(/);
    // APPLY REGEX?
    return value.phone.match(regexMatchesParentheses);
  });

  console.log(filtrado);

  filtrado.forEach((value) => {
    let addressContent = `Rua: ${value.address.street} - ${value.address.suite}, Cidade: ${value.address.city}, CEP: ${value.address.zipcode}`;
    let companyContent = `${value.company.name} - ${value.company.catchPhrase} <br> (${value.company.bs})`;
    const teamMember = document.createElement("div");
    teamMember.classList.add("team-member");
    teamMember.innerHTML = `
  <div class="text-center"><h3> ${value.name}<h3></div><br>
  <p><strong>Email:<br> </strong>${value.email}</p>
  <p><strong>Endereço:<br> </strong>${addressContent}</p>
  <p><strong>Telefone:<br> </strong>${value.phone}</p>
  <p><strong>Website:<br> </strong> <a target="__blank" href="http://www.${value.website}">${value.website}</a></p>
  <p><strong>Empresa:<br> </strong>${companyContent}</p>
    `;

    container.appendChild(teamMember);
  });
};

getContent();
