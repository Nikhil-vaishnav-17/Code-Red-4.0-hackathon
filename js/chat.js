const chatBody = document.getElementById('chat-body');

        // Chatbot responses based on user input
        const botResponses = {
            welcome: "Hello! I'm here to guide you through setting up a crowdfunding campaign or applying for grants. How can I help you today?",
            crowdfunding: "To set up a crowdfunding campaign, you will need to define your funding goal, draft your campaign message, and engage with potential donors. What's your project idea?",
            fundingGoals: "Setting a realistic funding goal is key. Consider your project's total costs, including production, marketing, and fees. What is your estimated budget?",
            campaignMessage: "A compelling campaign message tells your story and inspires donors. Can you describe your project in a few sentences?",
            engagingDonors: "Engaging donors requires continuous updates and communication. Would you like advice on social media strategy or email campaigns?",
            grants: "For applying to grants, you’ll need to research relevant opportunities and ensure you meet the eligibility criteria. Would you like help finding grants?"
        };

        // Function to display message in chat
        function displayMessage(content, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message', sender);
            messageDiv.innerText = content;
            chatBody.appendChild(messageDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        // Initial bot message
        displayMessage(botResponses.welcome, 'bot');

        // Function to handle user input and bot response
        function sendMessage() {
            const userSelection = document.getElementById('question-select').value;
            let userMessage = "";
            let botReply = "I'm sorry, I didn't understand that. Could you clarify?";

            switch(userSelection) {
                case "crowdfunding":
                    userMessage = "How do I set up a crowdfunding campaign?";
                    botReply = botResponses.crowdfunding;
                    break;
                case "fundingGoals":
                    userMessage = "How do I set a realistic funding goal?";
                    botReply = botResponses.fundingGoals;
                    break;
                case "campaignMessage":
                    userMessage = "How do I draft a compelling campaign message?";
                    botReply = botResponses.campaignMessage;
                    break;
                case "engagingDonors":
                    userMessage = "How do I engage potential donors?";
                    botReply = botResponses.engagingDonors;
                    break;
                case "grants":
                    userMessage = "Can you help me with applying for grants?";
                    botReply = botResponses.grants;
                    break;
            }

            displayMessage(userMessage, 'user');
            setTimeout(() => {
                displayMessage(botReply, 'bot');
            }, 500);
        }