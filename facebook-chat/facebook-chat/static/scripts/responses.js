function getBotResponse(input) {

    // Simple responses
    if (input == "hello") {
        return "Hello there, How can i help you?";
    } 
    else if (input == "I want Laundry Service") {
        return "Great, You can avail it from our website";
    }
    else if (input == "service area") {
        return "Please try to find it in search bar";
    }
    else if (input == "Delivery time") {
        return "It will depend on your delivery type while ordering";
    }
    else if (input == "amount") {
        return "Please find it in price chart in navigation bar";
    }
    else if (input == "cost") {
        return "Please find it in price chart in navigation bar";
    }
    else if (input == "price") {
        return "Please find it in price chart in navigation bar";
    }
    else if (input == "Thank You!") {
        return "You are welcome! <3";
    }
    else {
        return "Try asking something else!";
    }
}