#include<bits/stdc++.h>
using namespace std; 

int troop(vector<int> A) {
    
    sort(A.begin(), A.end()); 
    int count =0; int temp = 0;  
    for(int x = 1; x<A.size(); ) {
            if(temp<=0)
            {
                temp = A[x]; 
            }
            count = x; 
            temp -= x; 
    }
    return count; 
}




int main() {
    
    vector<int> Arr = {4,3,1}; 
    
     int ans = troop(Arr); 
     cout<< ans; 
    
}