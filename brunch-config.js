// See http://brunch.io for documentation.
exports.files = {
  javascripts: {joinTo: 'js/app.js'},
  stylesheets: {
    joinTo: {
      'css/app.css': /^app/,
      'css/vendors.css': /^node_modules/
    }
  }
};


exports.plugins = {

  sass:{
    options: {
      includePaths : ['node_modules/font-awesome/scss']
    }
  },

  //BrowserSync prend en charge tous les fichiers
  browserSync: {
    'files': [
      '*'
    ]
  },

  //Copycat créer un dossier fonts dans public et dépose les fichiers de fonts présent dans node/modules/font-awesome
  copycat : {
      'fonts': ['node_modules/font-awesome/fonts']
  }
};

exports.npm = {
  // Ajout de normalize dans le css généré
  styles: {
    'normalize.css' : ['normalize.css']
  }
}

exports.modules = {
  autoRequire: {
    'js/app.js': ['initialize']
  }
}