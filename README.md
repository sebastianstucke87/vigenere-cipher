Vigenere Cipher
===
Domain Driven Design implementation of the famous Vigenère cipher
---
The purpose of this example is the usage of a rich domain model `VigenereCipher`, 
containing the entire logic and state via value objects made out primitive data types. 
The object is instantiated via a function and never changed after that.

Included:
- Objects instead of primitive types
- Function(s) instead of a single constructor
- Unit tests for PhpUnit

The idea of DDD is opposed to anemic models where most of the logic is pushed away into services.

For more information about the DDD concept as whole (inc. `Data Transfer Objects`) have a look at these excelled references:
- https://www.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html#adding-behavior-to-entities
- https://web-techno.net/anemic-domain-model/
- https://joind.in/event/php-uk-2017/driving-design-through-examples
- https://medium.com/swlh/creating-coding-excellence-with-domain-driven-design-88f73d2232c3
- https://speakerdeck.com/el_stoffel/using-symfony-forms-with-rich-domain-models

