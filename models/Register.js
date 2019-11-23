

const Mongoose = require("mongoose");


const RegisterSchema = Mongoose.Schema({
    Nombre:String,
    Sexo:String,
    Edad:String,
    Nivelacademico:String,
    Numerodecelular:Number

});

module.exports =Mongoose.model("Register", RegisterSchema);








