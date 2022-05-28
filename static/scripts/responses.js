function getBotResponse(input) {

    // Simple responses
    if (input == "hello") {
        return "Hello there, How can i help you?";
    } else if (input == "I want Laundry Service") {
        return "Great, You can avail it from our website";
    } else {
        return "Try asking something else!";
    }
}