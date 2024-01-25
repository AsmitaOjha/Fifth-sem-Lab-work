#include <stdio.h>

int main() {
    // Declare a variable to store user input
    char name[50];

    // Prompt the user for input
    printf("Enter your name: ");

    // Read user input using scanf
    scanf("%s", name);

    // Display a personalized greeting
    printf("Hello, %s! Nice to meet you.\n", name);

    // Return 0 to indicate successful completion
    return 0;
}
