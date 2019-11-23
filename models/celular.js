
const mongoose = require('mongoose'),
    Schema = mongoose.Schema;
var PersonaSchema = Schema({
        nombre: {
            type: String,
            required: true,
           unique:true
        },
        Sexo: String,
        Memoria: {
            type: String,
            required: true
        },
        Edad: {
            type: Number,
            required: true
        },
        Nivelacademico: Number
    }, {
        timestamps: true
    });
    
    module.exports = mongoose.model("Persona", PersonaSchema);
module.exports = mongoose
