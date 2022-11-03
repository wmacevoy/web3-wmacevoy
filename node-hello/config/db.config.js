module.exports = {
    main : {
	db: "nodedb",
	user: "user",
	password: "yourpwhere",
	options : {
	    host: "localhost",
	    dialect: "mysql",
	    operationsAliases: false,
	    pool: {
		max: 5,
		min: 0,
		acquire: 30000,
		idle: 10000
	    }
	}
    }
};
