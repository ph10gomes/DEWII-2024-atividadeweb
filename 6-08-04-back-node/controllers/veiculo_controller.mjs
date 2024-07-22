import veiculo from "../models/veiculo.mjs"

const veiculoController = {

    "new": async (req, res) => {
        const created = await veiculo.create({
            fabricante: req.body.fabricante,
            modelo: req.body.modelo,
            ano: req.body.ano,
            cor: req.body.cor,
           
        })
        res.send(created)
    },
    "one": async (req, res) => {
        const v = await veiculo.findOne({
            where:{id:req.params.id}
        });
        res.json(v);
    },

    "all": async (req, res) => {
        res.json(await veiculo.findAll())

    },
    "edit": async (req, res) => {
        const v = await veiculo.findOne({
            where:{id:req.body.id}
        });
        v.fabricante = req.body.fabricante;
        v.modelo = req.body.modelo;
        v.ano = req.body.ano;
        v.cor = req.body.cor;
        await v.save();
        res.json(v);
    
    },
    "remove": async (req, res) => {
        const v = await veiculo.findOne({
            where:{id:req.body.id}
        });
        await v.destroy();
        res.json(v);
    }
};

export default veiculoController