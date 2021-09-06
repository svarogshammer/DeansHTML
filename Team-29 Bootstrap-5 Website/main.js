const express = require("express")  // node.js constant
const multer = require("multer")
const app = express()
const upload = multer() // Handles files uploads

app.post("/upload", upload.any(), (req, res) =>{
    console.log(req.files)  // logging which files received by server
    res.setHeader("Access-Control-Allow-Origin", "*")
    res.end("Done.")
});

app.listen(3000, () => {
    console.log("Server Running")
});
