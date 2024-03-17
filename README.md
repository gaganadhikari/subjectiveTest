# Project Information

This project is implemented using Laravel 11.

## Getting Started

To run the application, execute the following command: 

```./vendor/bin/sail up```


## Branch Information

This repository only contains one branch: `master`.

## Implementation Details

- Created seeders for `Student` and `Question` to generate 10 students and 15 questions for both Chemistry and Physics.
- Implemented a function to randomly generate 5 questions for both Physics and Chemistry.
- The index page of the questionnaire displays a list of active questions, where new questions can be generated, sent to all students, and viewed with the correct answers.
- When the questionnaire is sent to all students, they receive a unique link with their user ID as query parameters, ensuring uniqueness for each user.
- Due to time constraints, no frontend framework was used in the task, but the ability to learn and utilize one quickly is available if necessary.
- Added unit tests for the implemented functionalities.

