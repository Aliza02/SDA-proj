// import { degrees, PDFDocument, rgb, StandardFonts } from 'pdf-lib';

const generatePDF = async (name)=>{
  const{PDFDocument,rgb}=PDFLib;
  const exBytes=await fetch("cert.pdf").then(res => res.arrayBuffer());
  console.log(exBytes);
};


generatePDF();

