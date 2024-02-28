addEventListener('DOMContentLoaded', () =>{

    setTimeout(() => {
        var msg_err = document.getElementsByClassName("error_msg")
        for (const element of msg_err) {
            if (msg_err != "") {
                window.alert("Senhas não coincidem");
            }  
        }
    }, 10);
})
