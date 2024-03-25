function successMsg(){
    window.open("success.html");
}

function studentSubmit(){
window.open("Student.php")
}

function tutorSubmit(){
window.open("login.php")
}

function acSubmit(){
window.open("login.php")
}

function HodSubmit(){
window.open("login.php")
}

function updateyear() {
    var selecteddepartment = document.getElementById("department").value;
    var year = document.getElementById("year");

    year.innerHTML = "";

    if (selecteddepartment === "M.TECH CSE") {
      addOption(year, "2nd year", "2nd year");
      addOption(year, "3rd year", "3rd year");
      addOption(year, "4th year", "4th year");
      addOption(year, "5th year", "5th year");
    } else if (selecteddepartment === "BE CSE") {
      addOption(year, "2nd year", "2nd year");
      addOption(year, "3rd year", "3rd year");
      addOption(year, "4th year", "4th year");
    } else if (selecteddepartment === "ME AIDS"){
      addOption(year, "1st year", "1st year");
      addOption(year, "2nd year", "2nd year");
    }
    updatesection();
  }

  function updatesection() {
    var selecteddepartment = document.getElementById("department").value;
    var selectedyear = document.getElementById("year").value;
    var section = document.getElementById("section");

    section.innerHTML = "";

    
    if (selecteddepartment === "M.TECH CSE" && selectedyear === "2nd year") {
      addOption(section, "Section A", "Section A");
    } else if (selecteddepartment === "M.TECH CSE" && selectedyear === "3rd year") {
      addOption(section, "Section A", "Section A");}
      else if (selecteddepartment === "M.TECH CSE" && selectedyear === "4th year") {
      addOption(section, "Section A", "Section A");}
      else if (selecteddepartment === "M.TECH CSE" && selectedyear === "5th year") {
      addOption(section, "Section A", "Section A");
    } else if (selecteddepartment === "BE CSE" && selectedyear === "2nd year") {
      addOption(section, "Section A", "Section A");
      addOption(section, "Section B", "Section B");
      addOption(section, "Section C", "Section C");
    } else if (selecteddepartment === "BE CSE" && selectedyear === "3rd year") {
      addOption(section, "Section A", "Section A");
      addOption(section, "Section B", "Section B");
      addOption(section, "Section C", "Section C");
    } else if (selecteddepartment === "BE CSE" && selectedyear === "4th year") {
      addOption(section, "Section A", "Section A");
      addOption(section, "Section B", "Section B");
      addOption(section, "Section C", "Section C");
    }else if (selecteddepartment === "ME AIDS" && selectedyear === "1st year") {
      addOption(section, "Section A", "Section A");
    }else if (selecteddepartment === "ME AIDS" && selectedyear === "2nd year") {
      addOption(section, "Section A", "Section A");
    }
    updatet_name();
  }

  function updatet_name() {
    var selecteddepartment = document.getElementById("department").value;
    var selectedyear = document.getElementById("year").value;
    var selectedsection = document.getElementById("section").value;
    var t_name = document.getElementById("t_name");

    t_name.innerHTML = "";
    if (selecteddepartment === "M.TECH CSE" && selectedyear === "2nd year" && selectedsection === "Section A") {
      addOption(t_name, "Dr.S.Hariharagopalan", "Dr.S.Hariharagopalan");
      addOption(t_name, "Mrs.K.Ranjithapriya", "Mrs.K.Ranjithapriya");
      addOption(t_name, "Mrs.C.Sountharya", "Mrs.C.Sountharya");
    } else if (selecteddepartment === "M.TECH CSE" && selectedyear === "3rd year" && selectedsection === "Section A") {
      addOption(t_name, "Mrs.S.Aarthi", "Mrs.S.Aarthi");
      addOption(t_name, "Mrs.K.Dhana Shree", "Mrs.K.Dhana Shree");
      addOption(t_name, "Mrs.R.S.Ramya", "Mrs.R.S.Ramya");
    } else if (selecteddepartment === "M.TECH CSE" && selectedyear === "4th year" && selectedsection === "Section A") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    } else if (selecteddepartment === "M.TECH CSE" && selectedyear === "5th year" && selectedsection === "Section A") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    } else if (selecteddepartment === "BE CSE" && selectedyear === "2nd year" && selectedsection === "Section A") {
      addOption(t_name, "Dr.R.Anuradha", "Dr.R.Anuradha");
      addOption(t_name, "Mrs.C.Padmavathy", "Mrs.C.Padmavathy");
      addOption(t_name, "Mrs.M.Shanthini", "Mrs.M.Shanthini");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "2nd year" && selectedsection === "Section B") {
      addOption(t_name, "Mrs.Prince Sahaya Brighty", "Mrs.Prince Sahaya Brighty");
      addOption(t_name, "Mr.V.Krishna Kumar", "Mr.V.Krishna Kumar");
      addOption(t_name, "Mrs.S.Birundha", "Mrs.S.Birundha");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "2nd year" && selectedsection === "Section C") {
      addOption(t_name, "Mrs.G.Rathi", "Mrs.G.Rathi");
      addOption(t_name, "Mrs.N.Alagu Sundari", "Mrs.N.Alagu Sundari");
      addOption(t_name, "Mrs.K.Sonah", "Mrs.K.Sonah");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "3rd year" && selectedsection === "Section A") {
      addOption(t_name, "Dr.Madhumathi", "Dr.Madhumathi");
      addOption(t_name, "Mr.T.Chithrakumar", "Mr.T.Chithrakumar");
      addOption(t_name, "Mrs.T.Nithyashree", "Mrs.T.Nithyashree");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "3rd year" && selectedsection === "Section B") {
      addOption(t_name, "Mrs.A.Mahalakshmi", "Mrs.A.Mahalakshmi");
      addOption(t_name, "Mrs.M.Indra Priyadharshini", "Mrs.M.Indra Priyadharshini");
      addOption(t_name, "Mrs.G.Anusha", "Mrs.G.Anusha");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "3rd year" && selectedsection === "Section C") {
      addOption(t_name, "Mr.R.Vishnu Durai", "Mr.R.Vishnu Durai");
      addOption(t_name, "Mrs.G.Priyanga", "Mrs.G.Priyanga");
      addOption(t_name, "Mrs.Thenmozhi", "Mrs.Thenmozhi");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "4th year" && selectedsection === "Section A") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "4th year" && selectedsection === "Section B") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    }else if (selecteddepartment === "BE CSE" && selectedyear === "4th year" && selectedsection === "Section C") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    }else if (selecteddepartment === "ME AIDS" && selectedyear === "1st year" && selectedsection === "Section A") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    }else if (selecteddepartment === "ME AIDS" && selectedyear === "2nd year" && selectedsection === "Section A") {
      addOption(t_name, "", "");
      addOption(t_name, "", "");
      addOption(t_name, "", "");
    }
  }

  function addOption(selectElement, value, text) {
    var option = document.createElement("option");
    option.value = value;
    option.text = text;
    selectElement.add(option);
  }
  updateyear();

  