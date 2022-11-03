const { Sequelize } = require('sequelize');
const dbConfig = require("../config/db.config.js");

    
const sequelize = new Sequelize(dbConfig.main.db, dbConfig.main.user,dbConfig.main.password, dbConfig.main.options);

sequelize.authenticate()
    .then(()=>{console.log('Connection has been established successfully.');})
    .catch((error)=>{console.error('Unable to connect to the database:', error);});

const db = {};

db.Sequelize = Sequelize;
db.sequelize = sequelize;

db.tutorials = require("./tutorial.model.js") (sequelize, Sequelize);

module.exports = db;
