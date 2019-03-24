







def main():

	#Pegando o digitado pelo user .
	path = '/'.join(__file__.split('\\')[:-1])+'/Nani/temp'
	content = ''
	with open(path) as f :
		for linha in f :
			content += linha
			break

	path = '/'.join(__file__.split('\\')[:-1])+'/Nani/index.db'
	with open(path) as f :
		for linha in f :
			import re
			pattern = r'.*'+content+r'.*'
			string = linha
			if re.match(pattern, string) != None :
				path = '/'.join(__file__.split('\\')[:-1])+'/Nani/temp'
				with open(path,'w') as g :
					g.write(linha.split()[-1])




main()