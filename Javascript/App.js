import fs from 'fs';

const createDir=(dirPath)=>
{
	fs.mkdir(dirPath, {recursive:true}, (error)=>{
		if(error)
		{
			console.error('An error occurred', error);
		}
		else
		{
			console.log('Everything fine');
		}
	});
}

const createFile=(filePath,fileContent)=>
{
	fs.writeFile(filePath, fileContent, (error)=>
		{
			if(error)
			{
				console.error('An error occurred',error);
			}
			else
			{
				console.log('Everything fine');
			}
		});
}

const path='projects/challenge/Node_folder';
const filePath='projects/challenge/Node_folder/sample.txt';
const fileContent='content';
createDir(path);
createFile(filePath,fileContent);