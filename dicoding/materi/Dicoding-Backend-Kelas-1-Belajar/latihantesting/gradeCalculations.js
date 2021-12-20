
// Menghitung rata-rata nilai siswa dari sebuah inputan berupa 
// daftar angka dalam bentuk array.
const averageExams = (valuesExam) => {
  const numberValidation = valuesExam.every(exam => typeof exam === 'number');
  if (!numberValidation) throw Error('please input number');

  const sumValues = valuesExam.reduce((accumulator,currentValue) => accumulator + currentValue, 0);
  return sumValues / valuesExam.length;
};


//  Melakukan kalkulasi apakah seorang siswa lulus ujian atau tidak 
// berdasarkan nilai rata-rata yang didapatkan (bergantung pada fungsi averageExams).
const isStudentPassExam = (valuesExam, name) => {
  const minValues = 75;
  const average = averageExams(valuesExam);
  
  if (average > minValues) {
      console.log(`${name} is fail the exams`);
      return true;
  } else {
      console.log(`${name} is pass the exams`);
      return false;
  }
};

// isStudentPassExam([70, 80, 100, 90], 'sabiq')

module.exports = { averageExams, isStudentPassExam };