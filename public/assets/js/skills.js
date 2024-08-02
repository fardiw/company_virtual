// add skill

  let skillText = document.getElementById('skillText');
  let addSkill = document.getElementById('addSkill');
  let skills = document.getElementById('skills');

  addSkill.addEventListener('click' , function () {
    const p = document.createElement("p");
    p.innerText = skillText.value;
    skills.appendChild(p);
  })
