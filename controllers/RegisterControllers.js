const Register = require ("../models/celular");

const insert =( req,res)=>{

    const student = new Register(req.body);
    student .save((error, documents)=>{
        if(error)
        return res.status(500).json({
            msg:"Hubo un error"
        });
        return res.status(201).json({
            msg:"Creado",
            register: documents
        })
    });
}

const getRegister = (req, res) =>{
    Register.find({}, (error, documents)=>{
       if(error)
        res.status(500).json({
            msg:"Hubo un error"
        });
        return res.status(200).json({
            msg:"ok",
            registers: documents
        });
    });
};

module.exports.delete = (req, res, next) => {

    debug("Delete user", {
        username: req.params.username,
    });

    User.findOneAndDelete({username: req.params.username})
    .then((data) =>{
        if (data) res.status(200).json(data);
        else res.status(404).send();
    }).catch( err => {
        next(err);
    })
}


module.exports.update = (req, res, next) => {
    debug("Update user", {
        username: req.params.username,
        ...req.body
    });

    let update = {
        ...req.body
    };

    User.findOneAndUpdate({
            username: req.params.username
        }, update, {
            new: true
        })
        .then((updated) => {
            if (updated)
                return res.status(200).json(updated);
            else
                return res.status(400).json(null);
        }).catch(err => {
            next(err);
        });
}




module.exports ={
    getRegister,

    insert
};
