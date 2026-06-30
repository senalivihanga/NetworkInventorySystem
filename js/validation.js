function validateForm(){
    let username=document.getElementById("username").value;
    let password=document.getElementById("password").value;

    if(username==""){
        alert("Please enter username");
        return false;
    }

    if(password==""){
        alert("Please enter password");
        return false;
    }

    return true;
}

function liveSearch(){
    let input = document.getElementById("searchInput").value.toLowerCase();
    let rows = document.querySelectorAll("table tr");

    rows.forEach((row,index)=>{
        if(index===0) return;

        let text = row.innerText.toLowerCase();

        row.style.display = text.includes(input) ? "" : "none";
    });
}

function toggleMode(){
    document.body.classList.toggle("dark");
}