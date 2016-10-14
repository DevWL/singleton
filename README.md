# singleton-pattern
simple singleton pattern

```
    /*   
    * @desc holds single instance of this class
    */
```
- private static properyty "$instance"

```
    /*   
    * disable constructor
    */
```
- private constructor

```
    /*   
    * @return Singlton object
    * @desc check if instnace was already created:
    * if no instnace is set create one "new ClassName();" and assign it to "$instance"
    * if instance is set do not create another instance
    * returns $instance value
    */
```
- public static method "getInstance()" 

> CONS
- is considered to be an antipattern (use registry or dependency injector pattern instead)
- dificult to thebug
- you will not be able to create another instance if needed


