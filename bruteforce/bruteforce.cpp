#include <string>
#include <vector>
#include <iostream>
#include <chrono>
#include "md5.h"

const char* alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
int alphabet_length = strlen(alphabet);

// This function is taken (with small modifications) from:
// https://stackoverflow.com/questions/2380962/generate-all-combinations-of-arbitrary-alphabet-up-to-arbitrary-length
bool try_combinations(int length, std::string hash) {
	std::vector<int> index(length, 0);

	while (true) {
		
		std::string word;
		word.resize(length);

		for (int i = 0; i < length; ++i)
			word[i] = alphabet[index[i]];

		if (hash == md5(word)) {
			std::cout << "Original value found!\n";
			std::cout << word << "\n";
			return true;
		} 

		for (int i = length - 1; ; --i) {
			if (i < 0) return false;
			index[i]++;
			if (index[i] == alphabet_length)
				index[i] = 0;
			else
				break;
		}
	}
}

int main(int argc, char *argv[]) {

	if(argc < 2) {
		std::cout << "No hash provided\nPlease provide the hash via the first CLI parameter.\n";
	}
	
	std::string hash {argv[1]};
	
	std::cout << "Trying to crack hash " << hash << "\n";

	auto start = std::chrono::system_clock::now();
	for (int i = 1; i < 6; ++i) {
		if (try_combinations(i, hash)) break;
		else std::cout << "increasing string length to " << i + 1 << "\n";
	}

	auto end = std::chrono::system_clock::now();
	auto elapsed = end - start;
	std::cout << std::chrono::duration_cast<std::chrono::milliseconds>(elapsed).count() / 1000.0 << " Seconds \n";

}
