# Safe Housing 
Safe Housing Project is a real estate platform developed to enable real estate agents post real estate property for rent or for sale. 
In this platform I included security features to solve the problem of fake agents signing up and using the platform for fraudulent purposes. For  Example posting lisitngs to mislead users.

This project of course has its setbacks and was developed for the Cameroon milieu. It was developed folowing the real estate market in Cameroon.
Nevertheless the project should suit other real estate markets.

## Specific Objectivies
1. Verify and Validate a Legitimate Agent
2. Verify and Validate a Legitimate Listing
3. The platform should be simple to use with a simple UI/UX for users of any standard.

## Proposed Methodology 
 ### Verify and Validate a Legitimate Agent
   
   1. Person Verification: Use Image processing to verify agent's appearance on 2 different images. Image uploaded during sign up and image on ID CARD.
        - During Sign Up the user uploads an image of his ID CARD that contains his face and also takes an instant image using his device Camera. I used JavaScript to open device camera and take the image (https://github.com/Jenniline/Agent-lifePhoto)  then Laravel is used to save the image in the database. 
         -   The Face detection: Arcface applies MTCNN detector for face detection and alignment model.\
         -   Face comparison: Arcface employs LResNet 100E-IR model that uses ResNet100 as a backend with modified input and output layers. We determine whether two faces are similar or not by using a threshold.The Thresholds are 0.6, 0.7, and 0.8.



   2. Email Verification: The agent's Email will be verified using Laravel's in built verification technique calledMustVerifyEmail technique and mailtrap Emailing service to serve as a supposed user account. 
   3. Phone number verification using Twilio: Here the agent’s phone number is verified to ensure that the agent has used a valid phone number that is reachable and active and not just some dummy phone number for a malicious purpose.
   4. Verification using voice call: The admin can call the Phone number of the agent during the verification phase and ask the agent specific
questions here to ensure that the phone number is valid and reachable. Example questions; 
        - Is your name  Jane Doe?
        - Are you really an agent in Buea?
        - Do you have a real estate license authorization?
 After all these verifications are successful and the user has been validated, the user is now eligible to post a listing.  

 ### Verify and Validate a Legitimate Listing
 
 1. Use of Integrated Map: 
    - A listing is a property that is posted on the platform. In this case. A listing can only be posted in the location in which it was filmed or captured. That is the location of the property.Therefore meaning that the listing images are only taken on the spot and cannot be uploaded from the gallery.
    - To achieve this, The latitude and the longitude is tapped from the agent’s browser location using a package called Geolocation, that determines the coordinates of the user and the position is displayed using a map. The map used in this case is mapbox (mapbox.com)
    
  ## Present Results and Expected Results
 1. Image on the right, Image taken using device camera. Image on left Image from user ID CARD
![instant-photo-1](https://user-images.githubusercontent.com/39647995/166158603-e838ad08-841c-4cbe-89c1-3b0ddaa6e6f3.png)
![my-face-extraction-cropped](https://user-images.githubusercontent.com/39647995/166158730-d6f55cce-673d-43d2-ab6c-9e8df7e5647c.png)

![safe-house-1](https://user-images.githubusercontent.com/39647995/166159102-5cc77745-d0ae-47ca-bd6c-a9bf18b84f3c.png)
![safe-house-1-cropped](https://user-images.githubusercontent.com/39647995/166159213-dad39851-8a6d-4595-9bd2-e89562764a15.png)

Full Documentary of the project found here https://the-tech-learner.blogspot.com/2022/05/developing-real-estate-platform-using.html

##  Work still to be done
1. The integration of Twilio is not yet complete
2. Perfectly use ArcFace and MTCNN to Face detection and Comparison for this project. It is not yet feasible in Laravel. 

Reference to the study on Person Verificaition https://www.researchgate.net/publication/335143642_Personal_Verification_System_Using_ID_Card_and_Face_Photo

Project can be found here https://jenns-safe-housing.herokuapp.com/

learn more about the project here 
https://the-tech-learner.blogspot.com/2022/05/developing-real-estate-platform-using.html

