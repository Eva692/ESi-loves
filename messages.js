function sendMessage() {
    var input = document.getElementById("message-input");
    var messageContainer = document.querySelector(".message-container");

    if (input.value.trim() !== "") {
        var newMessage = document.createElement("div");
        newMessage.className = "message sent";
        newMessage.innerHTML = "<p>" + input.value + "</p>";
        messageContainer.appendChild(newMessage);

        // Optionnel : Sauvegarde du message localement
        localStorage.setItem("lastMessage", input.value);
        
        input.value = "";
        messageContainer.scrollTop = messageContainer.scrollHeight;
    }
}
