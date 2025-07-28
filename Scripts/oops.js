
class Person {
  constructor(name, age) {
    this._name = name;     
    this._age = age;
  }


  get name() {
    return this._name;
  }

  set name(newName) {
    if (newName.length > 0) {
      this._name = newName;
    } else {
      console.log("Invalid name!");
    }
  }


  describe() {
    console.log(`${this._name} is ${this._age} years old.`);
  }


  static species() {
    console.log("Humans");
  }
}


class Developer extends Person {
  constructor(name, age, role) {
    super(name, age); 
    this.role = role;
  }


  describe() {
    console.log(`${this._name} is a ${this.role} and is ${this._age} years old.`);
  }
}


const person1 = new Person("Sayan", 25);
const dev1 = new Developer("Suman", 30, "Frontend Developer");


console.log("--------------------------------")
console.log(person1.name); 
person1.name = "Rakesh";
console.log(person1.name); 
console.log("--------------------------------")


console.log("--------------------------------")
person1.describe(); 
dev1.describe();    
console.log("--------------------------------")


console.log("--------------------------------")
Person.species();  
Developer.species(); 
console.log("--------------------------------")


console.log("--------------------------------")
console.log(dev1 instanceof Developer); 
console.log(dev1 instanceof Person);    
console.log("--------------------------------")
