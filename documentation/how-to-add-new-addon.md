# How to add new addon

Steps
---

1. Add new addon to addons.json
2. Create a directory in controller/addons
3. Create a class in that new directory (copy class from another addon and adjust the namespace, classname and methods.)
4. Edit 'load_configuration' method. That is the only method that needs to be worked on to block the cookies. You can create your own method from there.
5. Test
6. Send a pull-request in github

Example
---
1. New addon to addons.json

    ```json
    "Add_To_Any": {
        "class": "cookiebot_addons_framework\\controller\\addons\\add_to_any\\Add_To_Any"
      },
    ```

2. Create directory 'add_to_any' in controller/addons

3. Create a class 'Add_To_Any' in 'add_to_any' directory (copy class from another addon and rename everything accordingly)

5. Go to 'load_configuration' method and rename the callback function to make it give more sense. Write your cookie-blocking logic in that function. You can find more information about how to block cookies in [how-to-block-cookies](how-to-block-cookies.md).

6. Test if the cookies are blocked.

7. Send a pull-request to our github repository.